<?php
    header('location:formulaireFilm.php');
    include 'mesFonctionsSQL.php';
    include 'mesFonctionsTable.php';
    $action = $_POST["action"];

    if($action == "DELETE") {
      $id = $_POST["id"];
    }else {
      $id = $_POST["ID_film"];
      $titre_film = $_POST["titre_film"];
      $date_sortie = $_POST["date_sortie"];
      $duree = $_POST["durée"];
      $production = $_POST["production"];
      $synopsis = $_POST["synopsis"];
      $affiche_film = $_POST["affiche_film"];
      $image_film = $_POST["image_film"];
      $video_film = $_POST["video_film"];
    }


    if ($action == "CREATE") {
      createFilm($titre_film, $date_sortie, $duree, $production, $synopsis, $affiche_film, $image_film, $video_film);

      echo "nouveau film créé <br/>";
      echo "<a href='admin.php'>Tableau des films</a>";
    }

    if ($action == "UPDATE") {
      updateFilm($id, $titre_film, $date_sortie, $duree, $production, $synopsis, $affiche_film, $image_film, $video_film);

      echo "Tableau des films mis à jour <br/>";
      echo "<a href='admin.php'>Tableau des films</a>";
    }

    if ($action == "DELETE") {
      deleteFilm($id);

      echo "Film supprimé <br/>";
      echo "<a href='admin.php'>Tableau des films</a>";
    }


 ?>
