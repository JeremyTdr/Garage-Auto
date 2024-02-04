<?php 
require('actions/cars/viewOccasionAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar.php'; ?>

        <div class="admin-section occasions-details">
            
                <div class="admin-title"><?=$offer_title;?></div>

                <div class="occasion-infos">
                    <div class="occasion-img" >
                        <img src="<?= $offer_img; ?>"></img>
                    </div>    

                    <h3>Détails & description</h3>

                    <div class="occasion-infos-numbers">
                        <p><?= $offer_price; ?> €</p>
                        <p>Année <?= $offer_year; ?></p>
                        <p><?= $offer_kms; ?> Kilomètres</p>
                    </div>
                    
                    <hr>
                    <h4>Description</h4>
                    <p><?= $offer_description; ?></p>
                    <hr>
                    <h4>Options</h4>
                    <p><?= $offer_options; ?></p>
                </div>

        </div>
    
    <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>