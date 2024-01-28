<?php
require ('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $occasionId = $_GET['id'];

    $checkIfOccasionExists = $bdd->prepare('SELECT * FROM offers WHERE id = ?');
    $checkIfOccasionExists->execute(array($occasionId));

    if($checkIfOccasionExists->rowCount() > 0){

        $occasionInfos = $checkIfOccasionExists->fetch();

        if($occasionInfos['id'] == $_GET['id']){

            $offer_title = $occasionInfos['title'];
            $offer_price = $occasionInfos['price'];
            $offer_year = $occasionInfos['year'];
            $offer_kms = $occasionInfos['kms'];
            $offer_description = $occasionInfos['description'];
            $offer_options = $occasionInfos['options'];
            $offer_img = $occasionInfos['img'];

            $offer_description = str_replace('<br />', '', $offer_description);
            $offer_options = str_replace('<br />', '', $offer_options);
        }

    } else {
        $errorMsg = "Aucune offre n'a été trouvée";
    }

} else {
    echo "Aucune offre n'a été toruvée";
}