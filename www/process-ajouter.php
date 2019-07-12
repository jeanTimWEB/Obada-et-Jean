<?php
require_once "database.php";

$database = new Database();

$image = $_FILES["image"];

$imageName = $image['name'];
$imageTmpName = $image['tmp_name'];
$imageSize = $image['size'];
$imageError = $image['error'];
$imageType = $image['type'];

$imageExt = explode('.', $imageName);
$imageActualExt= strtolower(end($imageExt));

$allowed = array('jpg', 'jpeg', 'png');

if(in_array($imageActualExt, $allowed)) {
    if ($imageError === 0) {

        if ($imageSize < 100000) {
            $imageNameNew = uniqid('', true).".".$imageActualExt;

            $imageDestination = 'uploads/' .$imageNameNew;
            move_uploaded_file($imageTmpName, $imageDestination);
        }else {
            echo "Your image size is too big";
        }

    }else {
        echo "there was an error uploading ypur file";
    }

}else {
    echo "You cannot upload files of this type" ;
}

$ajouter = $database->ajouter($_POST["titre"], $_POST["pays"], $imageDestination, $_POST["auteur"], $_POST["codePostale"], $_POST["depart"], $_POST["arrivee"], $_POST["description"], $_POST["ville"]);

header("Location: afficherInfo.php?id=$ajouter");

?>