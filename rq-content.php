//  requête pour afficher les différents éléments sur la page content.php

<?php

// On récupère tout le contenu de la table films
$reponse = $bdd->query("SELECT * FROM films WHERE id=" .$_GET["ID"]);


while ($donnees = $reponse->fetch())
{
?>
