<?php 

// Import de la databse
require_once "database.php";
// Création de la connexion
$database = new Database();
// Récupérer l'id depuis l'url

$promenade =$database->getAllPromenades();


session_start();

$id = $_SESSION['id'];
$user = $database->getUser($id);



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


    <style>

    .hide{

        <?php 
        
        if($_SESSION['logged'] === true){

            echo "display: block;";
        }else{

            echo "display: none;";

        }

        ?>

    }

    .hide2{

        <?php 
        
        if($_SESSION['logged'] === true){

            echo "display: none;";
        }else{

            echo "display: block;";

        }

        ?>


    }

    </style>

</head>

<body>
    <header>
        

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <img class="pics" src="assets/baby-feet-icon-4.png" width="50" height="50" alt="feet-icon">

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
    <section class="container-fluid">
    <div class="row  justify-content-around">
   
 
    <?php                     
    
        foreach ($promenade as $ballade){

            echo"<div class='col-lg-4 col-xs-1'>";          

            echo "<div class='card  mb-5 mesCartes'>
            <a href='afficherInfo.php?id=".$ballade->getId()."'><img class='card-img-top' src='".$ballade->getImage()."' alt='Card image cap'></a>
            <div class='card-body'>                           

            <h2 class='card-title'>".$ballade->getTitre()."</h2>
            <h4 class='card-title'>".$ballade->getPays()."</h4>
            <h5 class='card-title'>".$ballade->getVille()."</h5>
            <h6 class='card-title'>".$ballade->getAuteur()."</h6>
            <h6 class='card-title'>".$ballade->getCP()."</h6>
            <p class='card-text'>".$ballade->getDescription()."</p><br>
            
            
            </div>
            </div></div>"
        ;}                                          
    ?>           


            
    
 
    
  


</div>

</section>
</div></div>


    <footer>
        <!--Jean-->

        <div class="container-fluid fixed-bottom bg-light">

            <!-- Grid row -->
            <div class="row justify-content-around align-items-center">

                <!-- Grid column -->
                <div class="col-md-2 ">

                    <!-- Content -->
                    <h5>WebMasters</h5>
                    <p>Projet réalisé par Obada et Jean en classe digitale 2019 à Réalise</p>

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
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>