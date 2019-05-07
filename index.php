<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet cineMET</title>

<!-- Pour la navbar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">



</head>


<body>


  <!--je me connecte à la base de données -->
    <?php
    require_once 'connectbdd.php';
    ?>


      <header>
        <!--    code pour la navbar   -->

        <nav class="nav-wrapper" id="link_nav">
           <a href="index.thml" id="logo">CINE<strong>MET</strong></a>
           <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
               <li><a class="liens" href="allo_films.php">FILMS </a></li>
               <li><a class="liens"href="contact.php"> LOGIN </a></li>
           </ul>
         </nav>

          <ul class="sidenav" id="mobile-demo">
            <li><a class="liens" href="allo_films.php">FILMS </a></li>
            <li><a class="liens"href="contact.php"> LOGIN </a></li>
        </ul>
    </header>
    <!---  code pour le slider -->

    <div id="slider">
        <p class="title animated flipInY delay-1s"><strong>CineMET</strong></p>
        <figure>
            <img src="img/star-wars.jpg">
            <img src="img/avengers.jpg">
            <img src="img/toy-story-4.jpg">
            <img src="img/seigneur.jpg">
            <img src="img/star-wars.jpg">
        </figure>
    </div>

    <!--  code pour le carroussel --->
<main id="main">
    <div id="carou">
			<div id="c1" class="carouCard leftC"><img src="affiche/raoul_taburin.jpg" width="188px" height="250px"></div>
			<div id="c2" class="carouCard leftC"><img src="affiche/after.jpg" width="188px" height="250px" class="img-g"></div>
			<div id="c3" class="carouCard leftC"><img src="affiche/captain-marvel.jpg" width="188px" height="250px"></div>
			<div id="c4" class="carouCard"><img src="affiche/avengers-endgame.jpg" width="214px" height="285px" class="img-center"></div>
			<div id="c5" class="carouCard rightC"><img src="affiche/shazam.jpg" width="188px" height="250px"></div>
			<div id="c6" class="carouCard rightC"><img src="affiche/just_a_gigolo.jpg" width="188px" height="250px"></div>
			<div id="c7" class="carouCard rightC"><img src="affiche/dumbo.jpg" width="188px" height="250px"></div>
		</div>

</main>

<!--  pour le parallax  -->
  <div class="parallax-window" data-parallax="scroll" data-image-src="img/met2.jpg"
    alt="salle de cinéma en parallax">

  </div>

    <!-- code pour l'encart photo+texte -->
    <div class="encart">
      <div class="fond-img">
      <img src="img/cinema.jpg" width="440" height="330">
    </div>
      <div class="blabla">
      <h2 class="titre-encart"> Le cinéma Metropolis</h2>
      <p class="prg-encart">Le Cinéma METROPOLIS est situé en centre-ville, à 300 mètres de la place Ducale, coeur historique de Charleville-Mézières.
        L'arrivée de la "voie rapide", elle aussi à 300 mètres du cinéma, permet un accès direct et facile pour ceux qui viennent par la route.
        Le parking est gratuit tous les jours de 12h00 à 14h00 et après 18h30 jusqu'au lendemain 9h00.
        Il est gratuit le dimanche toute la journée.
        La première heure et demie est gratuite le mercredi, le vendredi après-midi et le samedi.
        <br/><br/>
        Le CINÉ-CAFÉ est à votre disposition pour prendre un verre, vous retrouver ou calmer une petite faim, avant ou après la séance de cinéma.
        Le comptoir CONFISERIE vous propose boissons, pop-corn, friandises et tout ce qu'il faut pour un bon moment de cinéma.
        <br/><br/>
        Développée sur 5.000 m2, l'architecture du cinéma METROPOLIS associe le verre et l'acier.
        La décoration du cinéma METROPOLIS repose principalement sur deux grandes toiles tirées du film éponyme de Ftritz LANG (1928). La passerelle
        du hall ainsi que le traitement du sol rejoignent les décors du film. Volontairement, les systèmes techniques (gaines de ventilation et chemins
        électriques) ont été laissés apparents.
        </p>
        </div>
</div>

<!----  mon footer --->
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


<!-- mon JS pour la navbar -->
<script>

	$(document).ready(function(){

		$(window).scroll(function(){

			if($(window).scrollTop()>300){
				$('nav').addClass('red');
			}else{
				$('nav').removeClass('red');
			}
		})
	}

)
</script>
<script>
$(document).ready(function(){
    $('.sidenav').sidenav();
  });
    
</script>


    <!-- mon JS pour le caroussel-->
<script>
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})
</script>


      <script type="text/javascript" src="js/script.js"></script>

      <!-- Pour la parallax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <script src="js/parallax.min.js"></script>

      <!-- Pour la navbar -->
<script src="">https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js</script>


      <!-- Pour le footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
