<?php 
require('actions/securityAction.php');
require('actions/services/addServiceAction.php');

include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section new-service">
            <div class="admin-title">Ajouter un service</div>
                
                <form class="form-add-service" method="POST" enctype="multipart/form-data">
                    <a href="./services-admin.php" class="return-btn"><i class="fas fa-chevron-left"></i> Retour</a>
                    <br>
                    <label for="serviceTitle">Titre</label>
                    <input type="text" name="serviceTitle" required="required">

                    <label for="serviceDesc">Description</label>
                    <textarea name="serviceDesc" rows="10" required="required"></textarea>

                    <button type="submit" name="createService" id="submit">Ajouter</button>
                    <br>
                    <span class="errorMsg"><?php if(isset($errorMsg)){ echo $errorMsg; } ?></span>
                </form>

   

        </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>