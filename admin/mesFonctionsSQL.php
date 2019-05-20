<?php

    function getDatabaseConnexion(){
      try   {
        $user = "angie";
        $pass = "wachtwoord";
      	// Je me connecte à ma bdd
      	$bdd = new PDO('mysql:host=localhost;dbname=CineMET;charset=utf8', $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;
      }catch(Exception $e)
      {
      	// En cas d'erreur, un message s'affiche et tout s'arrête
              die('Erreur : '.$e->getMessage());
      }
    }

    function getAllFilms(){
      $con = getDatabaseConnexion();
      $requete = 'SELECT * FROM Films';
      $rows = $con->query($requete);
      return $rows;
    }

    function readFilm($id){
      $con = getDatabaseConnexion();
      $requete = 'SELECT * FROM Films WHERE ID_film = '.$id.'';
      $rows = $con->query($requete);
      return $rows;
    }

    function createFilm($titre_film, $date_sortie, $duree, $production, $synopsis, $affiche_film, $image_film, $video_film){
      try  {
          $con = getDatabaseConnexion();
          $reponse = $con->prepare('INSERT INTO Films (titre_film,date_sortie,durée,production,synopsis,affiche_film,image_film,video_film)
          VALUES (:titre_film,:date_sortie,:duree,:production,:synopsis,:affiche_film,:image_film,:video_film)');
          $valeurs = [
            "titre_film" => $titre_film,
            "date_sortie" => $date_sortie,
            "duree" => $duree,
            "production" => $production,
            "synopsis" => $synopsis,
            "affiche_film" => $affiche_film,
            "image_film" => $image_film,
            "video_film" => $video_film
          ];

          $reponse->execute($valeurs);
      }catch(Exception $e) {
        echo $sql . "nope<br>" . $e->getMessage();
      }
    }


    function updateFilm($id, $titre_film, $date_sortie, $duree, $production, $synopsis, $affiche_film, $image_film, $video_film){
      try  {
          $con = getDatabaseConnexion();
          $requete = "UPDATE Films SET
                      titre_film = '$titre_film',
                      date_sortie = '$date_sortie',
                      durée = '$duree',
                      production = '$production',
                      synopsis = '$synopsis',
                      affiche_film = '$affiche_film',
                      image_film = '$image_film',
                      video_film = '$video_film',
                      WHERE ID_film = '$id'";
          $stmt = $con->query($requete);
      }catch(Exception $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    }


    function deleteFilm($id){
      try  {
          $con = getDatabaseConnexion();
          $requete = "DELETE FROM Films WHERE id = '$id'";
          $stmt = $con->query($requete);
      }catch(Exception $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      }

// fonction pour pouvoir créer un nouveau "film" vide
    function getNewFilm() {
      $film['ID_film'] = "";
      $film['titre_film'] = "";
      $film['date_sortie'] = "";
      $film['durée'] = "";
      $film['production'] = "";
      $film['synopsis'] = "";
      $film['affiche_film'] = "";
      $film['image_film'] = "";
      $film['video_film'] = "";
    }
?>
