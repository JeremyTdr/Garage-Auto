<?php
session_start();

if(!isset($_SESSION['auth'])) {
    header('Location: ../../login.php');
}

require('../database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $serviceId = $_GET['id'];

    $checkIfServiceExists = $bdd->prepare('SELECT * FROM services WHERE id = ?');
    $checkIfServiceExists->execute(array($serviceId));

    if($checkIfServiceExists->rowCount() > 0){

        $serviceInfos = $checkIfServiceExists->fetch();
        if($serviceInfos['id'] == $serviceId){

            $deleteThisService = $bdd->prepare('DELETE FROM services WHERE id = ?');
            $deleteThisService->execute(array($serviceId));

            header('Location: ../../services-admin.php');

        } else {
            echo "Vous n'avez pas le droit d'accèder à cette ressource";
        }

    } else {
        echo "Aucun service n'a été trouvée";
    }

} else {
    echo "Aucun service n'a été trouvée";
}