<?php


require_once "database.php";

$database = new Database();

// JE RÉCUPÈRE LES INFOS PASSÉE DANS LE FORMULAIRE
$entree = $_POST['username'];
$passEntree = $_POST['passTemp'];

// JE RÉCUPÈRE UN OBJET DE TYPE PROMENADE 
// QUI CONTIENT L'ID ET PASSWORD EN FONCTION DU NOM D'UTILISATEUR 
//AFIN DE FAIRE LA COMPARAISON ENTRE CE QUI EST DANS LA BD ET CE QUE LE USER VA RENTRER DANS LE FORMULAIRE
$pass = $database->getPasswordAndId($entree);

// L'OBJET DE CLASS PEUT APPELER LES METHODES DE LA CLASSE USER
// JE STOCK LE PASSWORD 
    $password=$pass->getPassword();
//JE STOCK L'ID
    $id = $pass->getId();
//JE COMPARE LE PASSWORD ENTRE ET LE PASSE DE LA BD
//SI C'EST OK. -> COMMENCE LA SESSION
    if (password_verify($passEntree,$password)){
        $page = "index.php";
//SESSION_START() CRÉER LE COOKIE        
        session_start();  
//ETAT DE LA CONNEXION         
        $_SESSION['logged'] =true;
//JE RECUPÈRE L'ID DU USER        
        $_SESSION['id'] = $id;
    }
    else{

        $page = "login.php?faux";        
    }
    


    header('Location:'. $page);

?>
