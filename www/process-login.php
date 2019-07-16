<?php


/*
function falsePass(){
    header('Location: login.php');
    exit;
}
*/



require_once "database.php";




$database = new Database();




$entree = $_POST['username'];
$passEntree = $_POST['passTemp'];

$pass = $database->getPasswordAndId($entree);

if ($pass == null){

   // echo "Le username n'est pas correct";
    
}
else{
    //echo "le username existe";
    $password=$pass->getPassword();

    if (password_verify($passEntree,$password)){
        $page = "index.php";
        
    }
    else{
 // falsePass(); 
        $page = "login.php?faux";
        
    }
    
}
//var_dump ("$pass");

// insertUser($nom, $prenom, $email, $username, $password)
//$database->insertUser('Vouillamoz','Jean','jeantim@gmail.com','jeantim','jeantimtim');

    header('Location:'. $page);


?>
