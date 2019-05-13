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

                    <!--je me connecte à la base de données -->
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
                <div class="titre"> Nouveautés </div><br />

                <?php
                include 'rq-films.php';

                // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
              {
              ?>

                <a href="content.php?ID=<?= $donnees['id']; ?>"><img class="effect" src="affiche/<?= $donnees['affiche']; ?>" id="action">
                    <p><?= $donnees['titre']; ?></p>
                </a>

                <?php
                }
                include 'rq-close.php';
                ?>

            </div>
        </div>
</div>

    <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    

    <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>




    <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
    <script src="js/siema.min.js"></script>
    <script src="js/allo_films.js"></script>

</body>

</html>
