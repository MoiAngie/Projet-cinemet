<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link src="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/allo_films.css">



</head>

<body>

    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <!--    code pour la navbar   -->

    <nav class="fixed-top" id="link_nav">
       <a href="index.php" id="logo">CINE<strong>MET</strong></a>
       <div id="Navbar">
           <a class="liens" href="allo_films.php">FILMS </a>
           <a class="liens"href="contact.php"> LOGIN </a>
       </div>
       <div class="m-nav-toggle">
           <span class="m-toggle-icon"></span>
       </div>
</nav>

    <!--//////////////////////////////  HEADER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="header_films">
        <h1 class="animated flipInY delay-1s">NOS FILMS</h1>

    </div>

    <div class="row nopadding" id="liste_films">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="menu_films">
                <ul id="menu-accordeon">
                    <input type="search" id="site-search" name="q" aria-label="Search through site content">

                    <button>Rechercher</button>
                    <?php
                    require_once 'connectbdd.php';

                    $req = "SELECT genre_film,ID_genre FROM Genre_film";
                    $reponse = $bdd->query($req);

                    // On affiche chaque entrée une à une
                  while ($donnees = $reponse->fetch())
                  {
                  ?>
                    <li><a href="genre.php?id=<?= $donnees['ID_genre']; ?>" class="collapsible"><?= $donnees['genre_film']; ?></a>
                    </li>

                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </ul>

            </div>

            <!--//////////////////////////////  LISTE GAUCHE POUR SMARTPHONE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

            <div class="menu_films_portable">
                <ul id="menu-accordeon">
                    <input type="search" id="site-search" name="q" aria-label="Search through site content">
                    <button>Rechercher</button>
                    <li><a href="#" class="collapsible">Films</a>
                        <ul>
                            <li><a href="#" class="collapsible">Action</a>

                            </li>
                            <li><a href="#" class="collapsible">Science-fiction</a>

                            </li>
                            <li><a href="#" class="collapsible">Comédie</a>

                            </li>
                            <li><a href="#" class="collapsible">Drame</a>

                            </li>
                            <li><a href="#" class="collapsible">Animation</a>

                            </li>
                            <li><a href="#" class="collapsible">Horreur</a>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
</div>

        <!--//////////////////////////////  MINIATURES FILMS DROITE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="liens_films fadeInUp animated">
              <?php
              require_once 'connectbdd.php';

              $id = $_GET['id'];
              $req = "SELECT genre_film,ID_genre FROM Genre_film WHERE Genre_film.ID_genre=$id";
              $reponse = $bdd->query($req);

              // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>



                <div class="titre"><?= $donnees['genre_film']; ?></div><br />

                <?php
                }
                $reponse->closeCursor(); // Termine le traitement de la requête
                ?>

                <!--je me connecte à la base de données -->
                  <?php
                  require_once 'connectbdd.php';

                  $id = $_GET['id'];
                    $req = "SELECT * FROM Genre_film,appartient,Films WHERE Genre_film.ID_genre=$id AND appartient.ID_genre = Genre_film.ID_genre AND Films.ID_film = appartient.ID_film ";
                    $reponse = $bdd->query($req);

                  // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                <a href="content.php?id=<?= $donnees['id']; ?>"><img class="effect " src="affiche/<?= $donnees['affiche_film']; ?>" id="action">
              <p><?= $donnees['titre_film']; ?></p>
          </a>

      <?php
      }
      $reponse->closeCursor(); // Termine le traitement de la requête
      ?>
            </div>
        </div>
</div>

    <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <footer id="footer" class="page-footer font-small text-white mdb-color pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left ">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3 mx-auto">

                <!-- Grid column -->
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class=" text-uppercase mb-4  font-weight-bold text-white"><a href="index.html"> AllocineMET</a>
                    </h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" id="foot">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Films à l'affiche</h5>
                    <p>


            <a href="#">Film 1</a>
                    </p>
                    <p>
                        <a href="#">Film 2</a>
                    </p>
                    <p>
                        <a href="#">Film 3</a>
                    </p>
                    <p>
                        <a href="#">Film 4</a>
                    </p>
                </div>


      <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" id="foot">

                <!-- Grid column -->
                <div class="col-sm-3 col-md-3 col-lg-2 col-xl-2 mx-auto mt-3" id="foot">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Liens utiles</h5>
                    <p>
                        <a href="https://simplon.co/">Lorem Ipsum</a>
                    </p>
                    <p>
                        <a href="https://simplon-charleville.fr/">Lorem Ipsum</a>
                    </p>
                    <p>
                        <a href="#!">Lorem Ipsum</a>
                    </p>

                    <p>
                        <a href="#">Lorem Ipsum</a>
                    </p>
                </div>

   <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" id="foot">

                <!-- Grid column -->
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold"><a href="contact.php">Contact</a></h5>
                    <p>
                        AllocineMET</p>
                    <p>
                        www.AllocineMET.net</p>
                    <p>
                        TEL +33 6 52 50 05 35</p>
                    <p>
                        TEL +33 6 87 26 69 70</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Footer links -->

            <hr class="hr-footer">

            <!-- Grid row -->
            <div class="row d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7">

                    <!--Copyright-->
                    <p class="text-center text-md-left">© 2019 Copyright: AllocineMET

                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 ml-lg-0">

                    <!-- Social buttons -->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/">
                                    <img src="img/facebook.png" title="facebook">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/">

                  <img src="img/twitter.png" title="twitter">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://github.com/">
                                    <img src="img/github.png" title="github">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://fr.linkedin.com/">
                                    <img src="img/linkedin.png" title="linkedin">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>

    <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>




    <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
    <script src="js/siema.min.js"></script>
    <script src="js/allo_films.js"></script>

</body>

</html>
