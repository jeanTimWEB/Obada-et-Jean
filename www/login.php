<?php 
$faux = $_GET['faux'];
?>

<!DOCTYPE html>
<html>
    <head>
<title>authentification</title>
    </head>
    <body>

        <?php

            if(isset($faux)){

                echo "le password n'est pas juste";

            }

        ?>
    <!-----------------FORMULAIRE DE LOGIN / LOGIN - PASSWORD-------------------------->

        <!--creation du formulaire de login avec bouton valider--->
        <form action="process-login.php" method="post">
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="passTemp" placeholder="password" required>
            <input type="submit" value="Valider">
        </form>

    </body>
</html>