
<?php

require_once "database.php";



$database = new Database();

$mot = $_GET["mot"];

$search = $database->search($mot);

?>

<!doctype html>

<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Hello, world!</title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>

        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <img src="assets/baby-feet-icon-4.png" width="50" height="50" alt="feet-icon">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                
                <span class="navbar-toggler-icon"></span>

            </button>
            
            <div class="collapse navbar-collapse offset-5" id="navbarTogglerDemo02">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                
                    <li class="nav-item">

                        <a class="nav-link " href="index.php">Index </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="ajouter.php">Ajouter</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="modifier.php?id=<?php echo $id ;?>">Modifier</a>

                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0" action="verif-form.php" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="mot">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

            </div>

        </nav>

        <?php 


            foreach($search as $recherche){

                echo "<div class='col-lg-4 col-xs-1'>";    

                echo "<div class='card  mb-5 mesCartes'>
                <a href='afficherInfo.php?id=".$recherche->getId()."'><img class='card-img-top' src='".$recherche->getImage()."' alt='Card image cap'></a>
                <div class='card-body'>                           

                <h2 class='card-title'>".$recherche->getTitre()."</h2>
                <h4 class='card-title'>".$recherche->getPays()."</h4>
                <h5 class='card-title'>".$recherche->getVille()."</h5>
                <h6 class='card-title'>".$recherche->getAuteur()."</h6>
                <h6 class='card-title'>".$recherche->getCP()."</h6>
                <p class='card-text'>".$recherche->getDescription()."</p><br>
              
               
                </div>
                </div></div>";
                


            };
        ?>


        <footer>
            <!--Jean-->
        
            <div class="container-fluid fixed-bottom bg-light d-none d-sm-block">
        
                <!-- Grid row -->
                <div class="row justify-content-around align-items-center">
    
                    <!-- Grid column -->
                    <div class="col-md-2 ">
    
                        <!-- Content -->
                        <h5>WebMasters</h5>
                        <p>Projet réalisé par Obada et Jean en classe digitale 2019 à Réalise</p>
    
                    </div>
    
                    <!-- Social buttons -->
                    <ul class="list-unstyled list-inline text-center">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/"><img
                                    src="assets/icon-FB.png" alt="" width="50">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-tw mx-1" href="https://twitter.com">
                                <img src="assets/icon-Twitter.png" alt="" width="50">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-gplus mx-1" href="https://www.youtube.com/?hl=FR">
                                <img src="assets/icon-YT.png" alt="" width="50">
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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"
        async></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    </body>

</html>