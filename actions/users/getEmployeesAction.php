<?php
require('actions/database.php');

//Récupération de la liste des employés
$getEmployees = $bdd->query('SELECT id, username, email FROM employees ORDER BY id');