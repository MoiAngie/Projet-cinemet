<?php

    function showTable(){
      $con = getDatabaseConnexion();
      $requete = $con->prepare('SELECT * FROM Films ORDER BY ID_film DESC limit 1');
      $requete->execute();

      return $requete;
    }

function getHeaderTable() {
  $headers = array();
  $headers[] = "ID_film";
  $headers[] = "titre_film";
  $headers[] = "date_sortie";
  $headers[] = "durée";
  $headers[] = "production";
  $headers[] = "synopsis";
  $headers[] = "affiche_film";
  $headers[] = "image_film";
  $headers[] = "video_film";
  return $headers;
}
 ?>
