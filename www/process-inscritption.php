<?php 
require_once("database.php");
$database = new Database();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

//J'ENCRYPTE LE PASS
$newPass = password_hash($password,PASSWORD_DEFAULT);


$database->insertUser($nom,$prenom,$email,$username,$newPass);


?>