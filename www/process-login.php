<?php


require_once "database.php";

$database = new Database();


$entree = $_POST['username'];
$passEntree = $_POST['passTemp'];

$pass = $database->getPasswordAndId($entree);


    $password=$pass->getPassword();
    $id = $pass->getId();

    if (password_verify($passEntree,$password)){
        $page = "index.php";
        session_start();   
        $_SESSION['logged'] =true;
        $_SESSION['id'] = $id;
    }
    else{

        $page = "login.php?faux";        
    }
    


    header('Location:'. $page);

?>
