<?php
 
require_once("database.php");
require_once "classUser.php";
$database = new Database();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$page = "login.php";



$listeUsers = $database->compareUsers();

foreach($listeUsers as $user){ 

    if ($user->getUsername() == $_POST['username']){
        $page ="inscription.php?user";
    }
   
}

if($page !== "inscription.php?user"){
    //J'ENCRYPTE LE PASS AVEC LA METHODE HASH
    $newPass = password_hash($password,PASSWORD_DEFAULT);

    //JE STOCK LE USER DANS LA BD
    $database->insertUser($nom,$prenom,$email,$username,$newPass);
}



//REDIRECTION VERS LE LOGIN

header('Location:'. $page);


?>