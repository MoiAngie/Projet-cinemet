<!--requête pour afficher les films sur la page allo_films.php-->

<?php

// On récupère tout le contenu de la table films
$reponse = $bdd->query('SELECT * FROM films');
