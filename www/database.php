<?php 

require_once 'classPromenades.php';
require_once 'classUser.php';

class Database
{

    //attributs
    private $connexion;
       
    //constructeur
    public function __construct()
    {
            //le chemin vers le serveur
            $PARAM_hote='mariadb'; // localhost
            // le port de connection a al base de donnée
            $PARAM_port='3306';
            // le nom de ma base de donnée
            $PARAM_nom_bd='Ballades';
            // le nom de user pour se connecter
            $PARAM_utilisateur='admin';
            //mot de passse du user pour se connecter
            $PARAM_mot_passe='admin1234';
    
        try
            {//le code qu'on essaye de faire 
            $this->connexion = new PDO(
                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd.';charset=utf8',
                $PARAM_utilisateur,
                $PARAM_mot_passe
            );                      
        } // si il échoue 
        catch(Exception $e)
            {
            echo 'Erreur: '.$e->getMessage().'<br/>';
            echo 'Code '.$e->getCode();
        }
    
                
    }
    //methodes - comportement
    //methodes - comportement
    public function getConnexion()
    {
        return $this->connexion;
    }
    // Fonction qui récupère une promenade en fonction de son id
    public function getPromenade($id)
    {
        // Je prépare ma requete
        $pdoStatement = $this->connexion->prepare(
            'SELECT id, titre, pays,image, auteur, codePostale, depart, arrivee, description, ville
            FROM Promenades
            WHERE id = :id;'
        );

        // J'exécute la requete
        $pdoStatement->execute(
            array("id" => $id)
        );

        // Je recupere et je stocke le resultat
        $maPromenade = $pdoStatement->fetchObject("Promenades");
        //var_dump($maPromenade);
        return $maPromenade;
    }


    public function getAllPromenades()
    {

        $pdoStatement = $this->connexion->prepare(
            'SELECT * FROM `Promenades`; '
        );

        $pdoStatement->execute();


        // Je recupere et je stocke le resultat
        $allPromenade = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Promenades');
        //var_dump($maPromenade);
        return $allPromenade;
      

    }

    public function ajouter( $titre, $pays, $image, $auteur, $codePostale, $depart, $arrivee, $description, $ville)
    {

        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO Promenades(titre, pays, image, auteur, codePostale, depart, arrivee, description, ville)
            VALUES(:titre, :pays, :image, :auteur, :codePostale, :depart, :arrivee, :description, :ville);"
        );

        $pdoStatement->execute(
            array(
            "titre" =>$titre,
            "pays" =>$pays,
            "auteur" =>$auteur,
            "codePostale" =>$codePostale,
            "depart" =>$depart,
            "arrivee" =>$arrivee,
            "description" =>$description,
            "image"=>$image,
            "ville" =>$ville
            
            )
        );

        $id = $this->connexion->lastInsertId();
        return $id;

    }

    //--------------------------------------------------------------------
    public function modifier($id, $titre, $pays,$image, $auteur, $codePostale, $depart, $arrivee, $description, $ville)
    {

        $pdoStatement = $this->connexion->prepare(
            "UPDATE Promenades
            SET 
            titre = :titre,
            pays = :pays,
            image = :image,
            auteur = :auteur,
            codePostale = :codePostale,
            depart = :depart,
            arrivee = :arrivee,
            description = :description,
            ville = :ville
            
            where id = :id;"
        );    

        $pdoStatement->execute(
            [
            'titre' => $titre,
            'pays' => $pays,
            'image' => $image,
            'auteur' => $auteur,
            'codePostale' => $codePostale,
            'depart' => $depart,
            'arrivee' => $arrivee,
            'description' => $description,
            'ville' => $ville,
            'id' => $id
            ]
        );  
        

    }

    //--------------------------------------------------------------------

        
    public function search($mot){

        $mot = "%" . $mot . "%";

        $pdoStatement = $this->connexion->prepare(
            "SELECT * FROM Promenades 
            WHERE titre LIKE :titre
            OR pays LIKE :pays
            OR ville LIKE :ville
            OR auteur LIKE :auteur"
        );

        $pdoStatement->execute([
            'titre'  => $mot,
            'pays'   => $mot,
            'ville'  => $mot,
            'auteur' => $mot
        ]);

        // Je recupere et je stocke le resultat
        $allPromenades = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Promenades');
        //var_dump($maPromenade);
        return $allPromenades;


    }



    public function insertUser($nom, $prenom, $email, $username, $password){

        $pdoStatement = $this->connexion->prepare(
            "INSERT into users(nom,prenom,email,username,password)
            VALUES (:nom,:prenom,:email,:username,:password);"
        );
        $pdoStatement->execute([
            "nom" => $nom ,
            "prenom" => $prenom ,
            "email" => $email,
            "username" => $username ,
            "password" => $password 
                    ]);

    }

//
/*
    public function loginUser(){

$pdoStatement = $this->connexion->prepare("SELECT * FROM users WHERE username = 'Obada';");
$pdoStatement->execute();

    }
*/



    public function getPasswordAndId($username){

       $pdoStatement = $this->connexion->prepare(

            "SELECT password, id FROM users WHERE username =:username;"
          
        );
        $pdoStatement->execute([
            'username' => $username
        ]);


     $resultat = $pdoStatement->fetchObject('User');

     return $resultat;

    }

    public function getUser($id){

        $pdoStatement = $this->connexion->prepare(

            "SELECT * FROM users WHERE id =:id;"
          
        );

        $pdoStatement->execute([
            'id' => $id
        ]);

        $user = $pdoStatement->fetchObject('User');

        return $user;


    }



}//fin database

?>