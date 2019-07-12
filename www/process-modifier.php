<?php 

require_once 'database.php';

$database = new Database();

$id = $_GET['id'];
$titre = $_POST ['titre'];
$pays = $_POST ['pays'];
$image = $_POST ['image'];
$auteur = $_POST ['auteur'];
$codePostale = $_POST ['codePostale'];
$depart= $_POST ['depart'];
$arrivee = $_POST ['arrivee'];
$description = $_POST ['description'];
$ville = $_POST ['ville'];



//modifier($id, $titre, $pays,$image, $auteur, $codePostale, $depart, $arrivee, $description, $ville)
$modifier = $database->modifier($id, $titre, $pays, $image, $auteur, $codePostale, $depart, $arrivee, $description, $ville);

header("location: afficherInfo.php?id=$id");




?>