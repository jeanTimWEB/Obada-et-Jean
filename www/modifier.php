<?php
//require_once('classPromenades.php');
require_once "database.php";

  //  $promenade = new Promenades();
    $database = new Database();

    $id = $_GET["id"];
    $promenade = $database->getPromenade($id);  

?>


<!DOCTYPE HTML>

<html>

<head>
    <title>modifier une Promenade</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/bf302c0b12.js"></script>
    <meta charset="utf-8">
</head>



<body class="modif">
    <header>
    

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <img class="pics" src="assets/baby-feet-icon-4.png" width="50" height="50" alt="feet-icon">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse offset-5" id="navbarTogglerDemo02">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">

                    <li class="nav-item ">

                        <a class="nav-link " href="index.php">Index </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link " href="ajouter.php">Ajouter</a>

                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0" action="verif-form.php" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="mot">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                
            </div>

        </nav>

     


    </header>

    <h2>Modifier une Promenade</h2>

    <section class="container-fluid">

        <form action="process-modifier.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <div class="row justify-content-around ">
                <div class="col-lg-6 col-xs-12">
                    
                    <br>
                    <label for="titre">titre: </label><br>
                    <input type="text" name="titre" value="<?php echo $promenade->getTitre()?>">

                    <br> 
                    <label for="pays">pays: </label><br>
                    <input type="text" name="pays" value="<?php echo $promenade->getPays()?>"> <br>

                    
                    <label for="ville">ville: </label><br>
                    <input type="text" name="ville" value="<?php echo $promenade->getVille()?>"> <br>

                
                    <label for="codePostale">codePostale: </label><br>
                    <input type="number" name="codePostale" value="<?php echo $promenade->getCP()?>"> <br>

                
                    <label for="depart">depart: </label><br>
                    <input type="text" name="depart" value="<?php echo $promenade->getDepart()?>"> <br>

                
                    <label for="arrivee">arrivee: </label><br>
                    <input type="text" name="arrivee" value="<?php echo $promenade->getArrivee()?>"> <br>

                
                    <label for="auteur">auteur: </label><br>
                    <input type="text" name="auteur" value="<?php echo $promenade->getAuteur()?>"> <br>

            
                    <label for="image">image: </label><br>
                    <input type="file" name="image" value="<?php echo $promenade->getImage()?>"> <br><br>
                            
                </div>
            
                <div class="col-md-6">
                    <br><br>
                    <label for="description">description: </label>
                    <textarea rows="10" cols="35" type="text" name="description" maxlength="300"> 
                        <?php echo $promenade->getDescription()?></textarea> <br>

                    <input type="submit">
                </div>
            </div>
        </form>
              
      
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
                        <a class="btn-floating btn-tw mx-1" href="https://www.linkedin.com/">
                        <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-gplus mx-1" href="https://twitter.com">
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