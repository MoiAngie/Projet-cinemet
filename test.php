<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content</title>

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

    // On récupère tout le contenu de la table films
    $reponse = $bdd->query('SELECT * FROM films');

      // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
    ?>


    <!-- pour l'image du film -->

      <img src="affiche/<?= $donnees['affiche']; ?>" class="mr-3" width="200" height="150">

      <br/>

    <iframe class="shadow-lg p-3 mb-5 bg-light rounded" src="" height="250px" width="450px">video/<?php echo $donnees['video']; ?></iframe>

      <br/>

  <!--I close the while -->
  <?php
  }
  //to let know my request is finished
  $reponse->closeCursor(); ?>

  </body>
</html>
