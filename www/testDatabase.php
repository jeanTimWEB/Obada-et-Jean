<?php
require_once "database.php";
//j'affiche le titre
echo "<h1> Test de la Database </h1>";

//j'instancie une nouvelle connexion à ma base de donnée
$database = new Database();

//affiche -debugg du contenu de la variable
//var_dump($database); 

if($database->getConnexion() == null) {
    echo "<h2> la connexion a échoué </h2>" ; 
}
else
{/*
    echo "<h2> <span> connexion à la base de donnée réussie !!!  </span>  <br/><br/><br/>
    //le chemin vers le serveur
    $PARAM_hote='mariadb'; <br>
    // le port de connection a al base de donnée
    $PARAM_port='3306';<br>
    // le nom de ma base de donnée
    $PARAM_nom_bd='AnnuaireToutou';<br>
    // le nom de user pour se connecter
    $PARAM_utilisateur='adminToutou';<br>
    //mot de passse du user pour se connecter
    $PARAM_mot_passe='Annu@ireT0ut0u';</h2><br>";*/ echo "INDEED!! ";
}

$database->modifier(1, 'lkjs', 'drfg', '', 'tr', 1220, 'dfgg', 'dfgfg', 'trztz', 'dfhh');
?>