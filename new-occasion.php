<?php 
require('actions/securityAction.php');
require('actions/cars/addOccasionAction.php');

include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section new-occasion">
            <div class="admin-title">Ajouter une annonce</div>
                
                <form class="form-add-occcasion" method="POST" enctype="multipart/form-data">
                    <a href="./occasions-admin.php" class="return-btn"><i class="fas fa-chevron-left"></i> Retour</a>
                    <br>
                    <label for="occasionTitle">Titre de l'annonce</label>
                    <input type="text" name="occasionTitle" required="required">
                    <label for="occasionPrice">Prix (en euros €)</label>
                    <input type="number" name="occasionPrice" required="required">
                    <label for="occasionYear" >Année</label>
                    <input type="number" name="occasionYear" required="required">
                    <label for="occasionKm">Kilométrage</label>
                    <input type="text" name="occasionKm" required="required">
                    <label for="occasionDesc">Description</label>
                    <textarea name="occasionDesc" rows="10" required="required"></textarea>
                    <label for="occasionOptions">Options</label>
                    <textarea name="occasionOptions" rows="10" required="required"></textarea>
                    <label for="occasionImg">Photo</label>
                    <input type="file" name="occasionImg" accept="image/png, image/jpeg, image/jpg">

                    <button type="submit" name="createOccasion" id="submit">Ajouter</button>
                    <br>
                    <span class="errorMsg"><?php if(isset($errorMsg)){ echo $errorMsg; } ?></span>
                </form>

   

        </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>