<?php 

$faux = $_GET['faux']



?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

        <?php

            if(isset($faux)){

                echo "le password n'est pas juste";

            }

        ?>
        <form action="process-login.php" method="post">
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="passTemp" placeholder="password" required>
            <input type="submit" value="Valider">
        </form>

    </body>
</html>