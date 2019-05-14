<?php

$db = new PDO('mysql:host=localhost;dbname=CineMET', 'angie', 'wachtwoord');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
