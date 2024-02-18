<?php
require('actions/database.php');

//Récupération de la liste des offres d'occasion
$getOccasions = $bdd->query('SELECT * FROM offers ORDER BY id');


//Filtrage de la liste des offres d'occasion

if(isset($_GET['yearMin']) || isset($_GET['yearMax']) || isset($_GET['priceMin']) || isset($_GET['priceMax']) || isset($_GET['kmsMin']) || isset($_GET['kmsMax'])) {

    $yearMin = $_GET['yearMin'];
    $yearMax = $_GET['yearMax'];
    $priceMin = $_GET['priceMin'];
    $priceMax = $_GET['priceMax'];
    $kmsMin = $_GET['kmsMin'];
    $kmsMax = $_GET['kmsMax'];

    $getOccasions = $bdd->query("SELECT * FROM offers WHERE 
                                year BETWEEN $yearMin AND $yearMax
                                AND 
                                price BETWEEN $priceMin AND $priceMax
                                AND 
                                kms BETWEEN $kmsMin AND $kmsMax");
}