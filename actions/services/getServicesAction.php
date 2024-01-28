<?php
require('actions/database.php');

//Récupération de la liste des employés
$getServices = $bdd->query('SELECT * FROM services ORDER BY id');