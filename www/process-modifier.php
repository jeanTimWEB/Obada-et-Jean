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

        if ($imageSize < 100000000) {
            $imageNameNew = uniqid('', true).".".$imageActualExt;

            $imageDestination = 'uploads/' .$imageNameNew;
            move_uploaded_file($imageTmpName, $imageDestination);
        }else {
            echo "Your image size is too big";
        }

    }else {
        echo "there was an error uploading your file";
    }

}else {
    echo "You cannot upload files of this type" ;
}

$modifier = $database->modifier($id, $_POST["titre"], $_POST["pays"], $imageDestination, $_POST["auteur"], $_POST["codePostale"], $_POST["depart"], $_POST["arrivee"], $_POST["description"], $_POST["ville"]);

header("Location: afficherInfo.php?id=$id");





//modifier($id, $titre, $pays,$image, $auteur, $codePostale, $depart, $arrivee, $description, $ville)
//$modifier = $database->modifier($id, $titre, $pays, $image, $auteur, $codePostale, $depart, $arrivee, $description, $ville);





//header("location: afficherInfo.php?id=$id");




?>