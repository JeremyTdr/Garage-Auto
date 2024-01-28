<?php 
    require('actions/securityAction.php');
    require('actions/cars/editOccasionAction.php');
    include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section edit-occasion">
            <div class="admin-title">Modifier une offre</div>

            <form class="form-add-occcasion" method="POST" enctype="multipart/form-data">
                <a href="./occasions-admin.php" class="return-btn"><i class="fas fa-chevron-left"></i> Retour</a>
                <br>
                <label for="occasionTitle">Titre de l'annonce</label>
                <input type="text" name="occasionTitle" required="required" value="<?=$offer_title;?>">
                <label for="occasionPrice">Prix (en euros €)</label>
                <input type="number" name="occasionPrice" required="required" value="<?=$offer_price;?>">
                <label for="occasionYear" >Année</label>
                <input type="number" name="occasionYear" required="required" value="<?=$offer_year;?>">
                <label for="occasionKm">Kilométrage</label>
                <input type="text" name="occasionKm" required="required" value="<?=$offer_kms;?>">
                <label for="occasionDesc">Description</label>
                <textarea name="occasionDesc" rows="10" required="required"><?=$offer_description;?></textarea>
                <label for="occasionOptions">Options</label>
                <textarea name="occasionOptions" rows="10" required="required"><?=$offer_options;?></textarea>
                <!-- <label for="occasionImg">Photo</label>
                <input type="file" name="occasionImg" accept="image/png, image/jpeg, image/jpg" value=""> -->

                <button type="submit" name="editOccasion" id="submit">Modifier</button>
                <br>
                <span class="errorMsg"><?php if(isset($errorMsg)){ echo $errorMsg; } ?></span>
            </form>
        
        </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>