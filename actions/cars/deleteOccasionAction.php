<?php
session_start();

if(!isset($_SESSION['auth'])) {
    header('Location: ../../login.php');
}

require('../database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $occasionId = $_GET['id'];

    $checkIfOccasionExists = $bdd->prepare('SELECT * FROM offers WHERE id = ?');
    $checkIfOccasionExists->execute(array($occasionId));

    if($checkIfOccasionExists->rowCount() > 0){

        $occasionInfos = $checkIfOccasionExists->fetch();
        if($occasionInfos['id'] == $occasionId){

            $deleteThisOccasion = $bdd->prepare('DELETE FROM offers WHERE id = ?');
            $deleteThisOccasion->execute(array($occasionId));

            header('Location: ../../occasions-admin.php');

        } else {
            echo "Vous n'avez pas le droit d'accèder à cette ressource";
        }

    } else {
        echo "Cette offre n'a pas été trouvée";
    }

} else {
    echo "Cette offre n'a pas été trouvée";
}