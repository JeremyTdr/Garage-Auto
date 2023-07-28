<?php 
require('actions/securityAction.php');
require('actions/users/addEmployeeAction.php'); 
include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section new-employee">
            <div class="admin-title">Ajouter un employé</div>
                
                <form class="form-add-employee" method="POST">
                    <a href="./admin.php" class="return-btn"><i class="fas fa-chevron-left"></i> Retour</a>
                    <br>
                    <label for="employeeUsername" class="modal-label">Nom d'utilisateur</label>
                    <input type="text" class="modal-input form_data" name="employeeUsername">
                    <label for="employeeEmail" class="modal-label">Adresse email</label>
                    <input type="text" class="modal-input form_data" name="employeeEmail">
                    <label for="employeePassword" class="modal-label">Mot de passe <span>(minimum 6 caractères, 1 Majuscule, 1 Chiffre, 1 Caractère spécial)</span></label>
                    <input type="password" class="modal-input form_data" name="employeePassword">
                    <button class="btn-add-modal" type="submit" name="createEmployee" id="submit">Ajouter</button>
                    <br>
                    <span class="errorMsg"><?php if(isset($errorMsg)){ echo $errorMsg; } ?></span>
                </form>

   

        </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>