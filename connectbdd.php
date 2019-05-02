<?php
try
{
	// Je me connecte à ma bdd
	$bdd = new PDO('mysql:host=localhost;dbname=CineMET;charset=utf8', 'angie', 'wachtwoord', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	// En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}


// si tout va bien, on continue

?>
