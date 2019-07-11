<?php
require_once("database.php");

$database = new Database();

$ajouter = $database->ajouter($_POST["titre"],$_POST["pays"],$_POST["image"],$_POST["auteur"],$_POST["codePostale"],$_POST["depart"],$_POST["arrivee"],$_POST["description"],$_POST["ville"]);

header("Location: afficherInfo.php?id=$ajouter");

?>