<?php 

// Import de la databse
require_once("database.php");
// Création de la connexion
$database = new Database();
// Récupérer l'id depuis l'url


$promenade = $database->getPromenade(1);

//var_dump($promenade);

$titre = $promenade->getTitre();
$pays = $promenade->getPays();
$image = $promenade->getImage();
$ville = $promenade->getVille();
$auteur = $promenade->getAuteur();
$CP = $promenade->getCP();
$depart = $promenade->getDepart();
$arrivee = $promenade->getArrivee();
$description= $promenade->getDescription();



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

                    <li class="nav-item">

                        <a class="nav-link" href="ajouter.php">Ajouter</a>

                    </li>


                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

            </div>

        </nav>



    </header>

    <section>
    </section>
<!---------------------------------------LES IMAGES---------------------------------------->
    <section class="container-fluid">
        <br>
        <!----ROW-->
        <div class="row no-gutters  justify-content-around">

            <div class="col-xl-4 col-xs-6">
                <div class="container ">
                    <a href="afficherInfo.php?id=1"> <img class="pics" src="<?php echo $image ?>" alt="Snow" style="width:100%;"> </a>
                        <div class="centered txt"><?php echo $titre ?></div>
                        <div class="top-left txt"><?php echo $pays ?></div>
                        <div class="top-right txt"><?php echo $ville ?></div>
                        <div class="centered-bottom txt"><?php echo $auteur ?></div>
                        <div class="descript "><?php echo $description ?></div>
                   
                </div>
            </div>
            <div class="col-xl-4 col-xs-6">
                <div class="container">
                    <a href="afficherInfo.html"> <img class="pics" src="assets/B1.jpg" alt="Snow" style="width:100%;"> </a>
                        <div class="centered txt">Ma super Ballade</div>
                        <div class="top-left txt">Suisse</div>
                        <div class="top-right txt">Appenzeler</div>
                        <div class="centered-bottom txt">par Jean-Louis</div>
                        <div class="descript ">Entre les vallons de l'Appenzeler, la promenade va vous emmener
                                découvrire les plus beau lieu de l'Appenzeler. Faune et fleurs de montagne au rendez-vous.</div>
                   
                </div>
            </div>
            <div class="col-xl-4 col-xs-6">
                <div class="container">
                    <a href="afficherInfo.html"> <img class="pics" src="assets/B1.jpg" alt="Snow" style="width:100%;"> </a>
                        <div class="centered txt">Ma super Ballade</div>
                        <div class="top-left txt">Suisse</div>
                        <div class="top-right txt">Appenzeler</div>
                        <div class="centered-bottom txt">par Jean-Louis</div>
                        <div class="descript ">Entre les vallons de l'Appenzeler, la promenade va vous emmener
                                découvrire les plus beau lieu de l'Appenzeler. Faune et fleurs de montagne au rendez-vous.</div>
                   
                </div>
            </div>
           
        </div>        
        <br>
        <!----ROW-->
        <div class="row  no-gutters flex-lg-wrap">

                <div class="col-xl-4 col-xs-6">
                <div class="container">
                    <a href="afficherInfo.html"> <img class="pics" src="assets/B1.jpg" alt="Snow" style="width:100%;"></a>
                        <div class="centered txt">Ma super Ballade</div>
                        <div class="top-left txt">Suisse</div>
                        <div class="top-right txt">Appenzeler</div>
                        <div class="centered-bottom txt">par Jean-Louis</div>
                        <div class="descript ">Entre les vallons de l'Appenzeler, la promenade va vous emmener
                                découvrire les plus beau lieu de l'Appenzeler. Faune et fleurs de montagne au rendez-vous.</div>
                    
                </div>
            </div>
            <div class="col-xl-4 col-xs-6">
                <div class="container">
                    <a href="afficherInfo.html"> <img class="pics" src="assets/B1.jpg" alt="Snow" style="width:100%;"> </a>
                        <div class="centered txt">Ma super Ballade</div>
                        <div class="top-left txt">Suisse</div>
                        <div class="top-right txt">Appenzeler</div>
                        <div class="centered-bottom txt">par Jean-Louis</div>
                        <div class="descript ">Entre les vallons de l'Appenzeler, la promenade va vous emmener
                                découvrire les plus beau lieu de l'Appenzeler. Faune et fleurs de montagne au rendez-vous.</div>
                   
                </div>
            </div>
            <div class="col-xl-4 col-xs-6">
                <div class="container">
                    <a href="afficherInfo.html"> <img class="pics" src="assets/B1.jpg" alt="Snow" style="width:100%;"> </a>
                        <div class="centered txt">Ma super Ballade</div>
                        <div class="top-left txt">Suisse</div>
                        <div class="top-right txt">Appenzeler</div>
                        <div class="centered-bottom txt">par Jean-Louis</div>
                        <div class="descript ">Entre les vallons de l'Appenzeler, la promenade va vous emmener
                                découvrire les plus beau lieu de l'Appenzeler. Faune et fleurs de montagne au rendez-vous.</div>
                   
                </div>
            </div>
            
        </div>
        <br>
        <!----ROW-->
    </section>










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
                        <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/"><img
                            class="icon"       src="assets/icon-FB.png" alt="" width="50">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-tw mx-1" href="https://twitter.com">
                            <img class="icon" src="assets/icon-Twitter.png" alt="" width="50">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-gplus mx-1" href="https://www.youtube.com/?hl=FR">
                            <img class="icon" src="assets/icon-YT.png" alt="" width="50">
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