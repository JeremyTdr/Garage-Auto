<?php

require('actions/database.php');

if(isset($_POST['editSchedule'])){

        $new_title_offer= htmlspecialchars($_POST['titleOffer']);
        $new_description_offer= nl2br(htmlspecialchars($_POST['descriptionOffer']));
        $new_details_offer= nl2br(htmlspecialchars($_POST['detailsOffer']));
        $new_loc_offer= htmlspecialchars($_POST['locOffer']);
        $new_salary_offer= htmlspecialchars($_POST['salaryOffer']);

        $editOffer = $bdd->prepare('UPDATE offers SET title = ?, description = ?, details = ?, location = ?, salary = ? WHERE id = ?');
        $editOffer->execute(array($new_title_offer, $new_description_offer, $new_details_offer, $new_loc_offer, $new_salary_offer, $offerId));

        header('Location: my-offers.php');

}