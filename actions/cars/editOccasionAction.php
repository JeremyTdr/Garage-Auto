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
            //$offer_img = $occasionInfos['img'];
        }

    } else {
        $errorMsg = "Aucune offre n'a été trouvée";
    }


    if(isset($_POST['editOccasion'])){

        $new_offer_title = htmlspecialchars($_POST['occasionTitle']);
        $new_offer_price = htmlspecialchars($_POST['occasionPrice']);
        $new_offer_year = htmlspecialchars($_POST['occasionYear']);
        $new_offer_kms = htmlspecialchars($_POST['occasionKm']);
        $new_offer_description = htmlspecialchars($_POST['occasionDesc']);
        $new_offer_options = htmlspecialchars($_POST['occasionOptions']);
        //$new_offer_img = htmlspecialchars($_POST['occasionImg']);
        

        $editOccasion = $bdd->prepare('UPDATE offers SET title = ?, price = ?, year = ?, kms = ?, description = ?, options = ? WHERE id = ?');
        $editOccasion->execute(array($new_offer_title, $new_offer_price, $new_offer_year, $new_offer_kms, $new_offer_description, $new_offer_options, $occasionId));

        echo '<script>
                alert("La modification a bien été effectuée");
                window.location.href="occasions-admin.php";
            </script>';
            

    } 

}