<?php 

require_once('classPromenades.php');

    class Database{

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

    // Fonction qui récupère une promenade en fonction de son id
    public function getPromenade($id){
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


    public function getAllPromenades(){

        $pdoStatement = $this->connexion->prepare(
            'SELECT * FROM `Promenades`; '
        );

        $pdoStatement->execute();


        // Je recupere et je stocke le resultat
        $allPromenade = $pdoStatement->fetchAll( PDO::FETCH_CLASS,'Promenades');
       //var_dump($maPromenade);
        return $allPromenade;
      

    }

        
    }

?>