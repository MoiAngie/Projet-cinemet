<?php

    include 'mesFonctionsSQL.php';
    include 'mesFonctionsTable.php';

 ?>

<html>
<header>
  <link rel="stylesheet" href="../css/admin.css">
</header>
<body>

    <form action="createUpdate.php" method="POST">
      <center><button class="btn"><a href="admin.php">Liste des films</a></button></center>


        <input type="hidden" name="id" value="<?= $film['ID_film']; ?>"/>
        <input type="hidden" name="action" value="<?= $action; ?>"/>
        <div>
          <label for="titre_film">Titre du film :</label>
          <input type="text" id="titre_film" name="titre_film" value="<?= $film['titre_film']; ?>">
        </div>
        <div>
          <label for="date_film">Date de sortie :</label>
          <input type="text" id="date_film" name="date_film" value="<?= $film['date_film']; ?>">
        </div>
        <div>
          <label for="durée">Durée du film :</label>
          <input type="text" id="durée" name="durée" value="<?= $film['durée']; ?>">
        </div>
        <div>
          <label for="production">Production :</label>
          <input type="text" id="production" name="production" value="<?= $film['production']; ?>">
        </div>
        <div>
          <label for="synopsis">Synopsis :</label>
          <input type="text" id="synopsis" name="synopsis" value="<?= $film['synopsis']; ?>">
        </div>
        <div>
          <label for="affiche_film">Affiche du film:</label>
          <input type="text" id="affiche_film" name="affiche_film" value="<?= $film['affiche_film']; ?>">
        </div>
        <div>
          <label for="image_film">Image du film:</label>
          <input type="text" id="image_film" name="image_film" value="<?= $film['image_film']; ?>">
        </div>
        <div>
          <label for="video_film">Video du film:</label>
          <input type="text" id="video_film" name="video_film" value="<?= $film['video_film']; ?>">
        </div>

      </form>

      <br/>


        <center><button type="submit">Créer</button></center>



        <center><button type="submit">Modifier</button></center>



        <center><button type="submit">Supprimer</button></center>



</body>
</html>
