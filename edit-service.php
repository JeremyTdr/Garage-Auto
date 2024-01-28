<?php 
    require('actions/securityAction.php');
    require('actions/services/editServiceAction.php');
    include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section edit-services">
            <div class="admin-title">Modifier un service</div>

                <form class="form-edit-service" method="POST" enctype="multipart/form-data">
                    <a href="./admin.php" class="return-btn"><i class="fas fa-chevron-left"></i> Retour</a>
                    <br>
                    <label for="serviceTitle" class="modal-label">Titre</label>
                    <input type="text" class="modal-input form_data" name="serviceTitle" value="<?=$service_title;?>">
                    <label for="serviceDescription" class="modal-label">Description</label>
                    <textarea name="serviceDesc" rows="10" required="required"><?=$service_description;?></textarea>
                    
                    <button class="btn-add-modal" type="submit" name="editService" id="submit">Appliquer</button>
                    <br>
                    <span class="errorMsg"><?php if(isset($errorMsg)){ echo $errorMsg; } ?></span>
                </form>

            </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>