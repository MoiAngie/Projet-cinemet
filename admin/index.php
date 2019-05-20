
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet cineMET</title>

<!-- Bootstrap CSS pour le footer-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--Animate CSS pour le titre-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marko+One" rel="stylesheet">
<!-- pour les autres textes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!--mon CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">



</head>


<body>

      <header>
         <!--code pour la navbar-->

          <nav class="fixed-top" id="link_nav">
             <a href="index.php" id="logo">CINE<strong>MET</strong></a>
             <div id="Navbar">
                 <a class="liens" href="allo_films.php">FILMS </a>
                 <a class="liens"href="login.php"> LOGIN </a>
             </div>
             <div class="m-nav-toggle">
                 <span class="m-toggle-icon"></span>
             </div>
         </nav>
    </header>

    <!--- code pour la gestion admin-->
      <?php

        include 'mesFonctionsSQL.php';

        $film = readFilm(3);
        //echo $film['titre_film'];
        while ($donnees = $film->fetch())
        {
          echo $donnees['titre_film'];
        }
      ?>


<!-- mon JS pour la navbar -->

<script>
$(document).ready(function(){
    $('.sidenav').sidenav();
  });

</script>
      <script type="text/javascript" src="../js/script.js"></script>


      <!-- Pour la navbar -->
      <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
          integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
      <script src="j../s/siema.min.js"></script>
      <script src="../js/allo_films.js"></script>

      <!-- Pour le footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
