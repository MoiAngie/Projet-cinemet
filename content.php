<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content</title>

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- pour les autres textes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!--mon CSS -->
    <link rel="stylesheet" href="css/style_pages_cont_real_act.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
  <!--je me connecte à la base de données -->
    <?php
    require_once 'connectbdd.php';
    ?>

    <?php
    include ("rq-content.php");

    while ($donnees = $reponse->fetch())
    {
    ?>


    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <header id="haut">
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
    </header>


  <main id="content">

    <!--  pour le titre -->

  <div class="hoofd">
    <h1 class="text-uppercase animated flipInY delay-1s"><?php echo $donnees['titre']; ?></h1>
</div>

    <!-- pour l'image du film
    <div class="media shadow-lg p-3 mb-5 bg-light rounded">-->
      <center><img src="image/<?php echo $donnees['image']; ?>" class="mr-3 image-du-film" width="800" height="448"></center>
      <!-- </div>-->

    <!-- pour la description du film -->

    <p class="text-center bg-light">
      <?php echo $donnees['synopsis']; ?>
    </p>

    <!-- pour la partie récap d'infos et la bande annonce -->

  <div class="row">
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-5">

    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Date de sortie: <?php echo $donnees['date_sortie']; ?></h5>
        </div>
        <p class="mb-1"><?php echo $donnees['durée']; ?></p>
        <!--<small>Donec id elit non mi porta.</small>-->
  <a href="realisateur.php" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Réalisateur</h5>
    </div>
    <p class="mb-1"><?php echo $donnees['realisateur']; ?></p>
    <!--<small>Donec id elit non mi porta.</small>-->
  </a>
  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Production</h5>
    </div>
    <p class="mb-1"><?php echo $donnees['producteur'] ?></p>
    <!--<small class="text-muted">Donec id elit non mi porta.</small>-->
  </a>
  <a href="acteur.php" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Acteurs</h5>
    </div>
    <p class="mb-1"><?php echo $donnees['acteur_1']; ?> et <?php echo $donnees['actrice_1']; ?></p>
    <small class="text-muted"><?php echo $donnees['acteur_2']; ?> et <?php echo $donnees['actrice_2']; ?></small>
  </a>
</div>
</div>

  <div class="col-1 col-sm-3 col-md-3 col-lg-1 col-xl-1"></div>
  <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4">
    <iframe class="shadow-lg p-3 mb-5 bg-light rounded" height="250px" width="450px" src="<?php echo $donnees['video']; ?>"></iframe>
  </div>

<div class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1"></div>

</div>

  </main>

  <?php
}
  include ("rq-close.php");
  ?>

<footer id="footer" class="page-footer font-small text-white mdb-color pt-4 sticky bottom">

    <!-- Footer Links -->
    <div class="container text-center text-md-left ">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3 mx-auto">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class=" text-uppercase mb-4  font-weight-bold text-white"><a href="index.html"> AllocineMET</a></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
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

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
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
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
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
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
      <p class="text-center text-md-left">© 2019 Copyright: AllocineMET

          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

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



  <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>


  <!-- Pour la navbar -->
  <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
      integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
  <script src="js/siema.min.js"></script>
  <script src="js/allo_films.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--<script>

$('.m-nav-toggle').click(function(e){
        e.preventDefault();
        $('#Navbar').toggleClass('is-open');
    })

document.addEventListener('DOMContentLoaded', function () {
    window.onscroll = function (ev) {
        document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" :
            "cInvisible";
    };
});

$('#sidebarCollapse').click(function (e) {
    e.preventDefault();
    $('#sidebar').toggleClass('active');
})

function openModal() {
    document.getElementById("modal").style.top = "0px";
}

function closeModal() {
    document.getElementById("modal").style.top = "-780px";
}</script>-->

</body>
</html>
