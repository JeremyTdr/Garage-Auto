<?php
require('actions/database.php');

//Récupération de la liste des offres d'occasion
$getOccasions = $bdd->query('SELECT * FROM offers ORDER BY id');