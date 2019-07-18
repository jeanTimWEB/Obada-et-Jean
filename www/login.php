<?php 
$faux = $_GET['faux'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Annuaire de Ballades</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/bf302c0b12.js"></script>

</head>  
    <body class="login">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!---LOGO--->
            <img class="pics" src="assets/baby-feet-icon-4.png" width="50" height="50" alt="feet-icon">
            <!---HAMBURGER MENU TOOGLE--->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse offset-5" id="navbarTogglerDemo02">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">

                    <li class="nav-item active">

                        <a class="nav-link " href="index.php">Index </a>

                    </li>

                    <li class="nav-item active">

                        <a class="nav-link hide2" href="login.php">Login </a>

                    </li>



                    <li class="nav-item">

                        <a class="nav-link hide2" href="inscription.php">SignUp</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link hide" href="ajouter.php">Ajouter</a>

                    </li>



                    <li class="nav-item hide">

                        <a href=""  class="nav-link hide" >bonjour <?php if($_SESSION['logged'] === true){echo $user->getPrenom();}?></a> 

                    </li>   

                    
                    <li class="nav-item">

                        <a class="nav-link hide" href="process-deconnecter.php">Deconnecter</a>

                    </li>


                </ul>

                <form class="form-inline my-2 my-lg-0" action="verif-form.php" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="mot">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

            </div>

        </nav>
    </header>



        <?php

            if(isset($faux)){
                echo "le password n'est pas juste";
            }
        ?>
    <!-----------------FORMULAIRE DE LOGIN / LOGIN - PASSWORD-------------------------->

    <section class="container-fluid">
        <div class="row justify-content-center mt-5">
        <!--creation du formulaire de login avec bouton valider--->
            <form action="process-login.php" method="post">
                <input class="col-xs-12 col inputLogin" type="text" name="username" placeholder="username" required>
                <input class="col-xs-12 col inputLogin" type="password" name="passTemp" placeholder="password" required><br>
                <input class="col-xs-12 col  inputLogin" type="submit" value="Valider">
            </form>
            <!------fin de form------------------------->
        </div>
      
    </section>
  <footer>
        <!--Jean-->

        <div class="container-fluid fixed-bottom bg-light d-none d-md-block">

            <!-- Grid row -->
            <div class="row justify-content-around align-items-center">

                <!-- Grid column -->
                <div class="col-md-2 ">

                    <!-- Content -->
                    <h5>WebMasters</h5>
                    <p>Projet réalisé par Obada et Jean en classe digitale 2019 à <a href="https://www.realise.ch/fr/home-page">Réalise</a> </p>

                </div>

                <!-- Social buttons -->
                <ul class="list-unstyled list-inline txt-center">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/">
                        <i class="fab fa-facebook"></i>                  
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-tw mx-1" href="https://twitter.com">
                        <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-gplus mx-1" href="https://www.youtube.com/?hl=FR">
                        <i class="fab fa-twitter"></i>
                        </a>
                    </li>

                </ul>
                <!-- Social buttons -->

                <!-- Call to action -->
                <ul class="list-unstyled">
                    <li>
                        <h5 class="mb-1">Besoin d'un site Web ? </h5>
                    </li>
                    <li>
                        <a href="#!" class="btn btn-secondary btn-rounded">Demandez votre devis!</a>
                    </li>
                </ul>
                <!-- Call to action -->

            </div>

        </div>

    </footer>
    <!-- Footer -->
    </body>
</html>