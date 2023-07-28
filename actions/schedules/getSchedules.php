<?php
require('actions/database.php');

//Récupération de la liste des horraires
$getSchedules = $bdd->query('SELECT * FROM schedules ORDER BY id');