<?php 

$error = $_GET['user'];

if(isset($error)){

    echo "le nom d'utlisateur est deja utlisé";
}

?>


<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>


    <section class="container-fluid">
        <form action="process-inscritption.php" method="post">
            <div class="row justify-content-around">
                <div class="col">
                            
                    <label for="nom">nom: </label>
                    <input type="text" name="nom" required>
    <br><br>
                    <label for="prenom">prenom: </label>
                    <input type="text" name="prenom" required> 
    <br><br>
                    <label for="email">email: </label>
                    <input type="email" name="email" required>  
    <br><br>              
                    <label for="username">username: </label>
                    <input type="text" name="username" required>     
    <br><br>           
                    <label for="password">password: </label>
                    <input type="password" name="password" required>   
    <br><br>
                    <input type="submit" value="Valider">

                </div>
            </div>
        </form>
    </section>

</body>
</html>



