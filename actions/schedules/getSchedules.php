<?php
require('actions/database.php');

//Récupération de la liste des partenaires
$getSchedules = $bdd->query('SELECT * FROM schedules ORDER BY id');