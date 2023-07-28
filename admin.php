<?php 
require('actions/securityAction.php');
require('actions/users/getEmployeesAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section employees-management">
            
                <div class="admin-title">Liste des employés</div>

                <a href="./new-employee.php" class="create-employee" id="create-employee"><i class="fas fa-plus"></i> Ajouter un employé</a>
                <span class="succesMsg">
                <ul class="employees-list">
                    <?php while($employee = $getEmployees->fetch()){ ?>
                        <li class="list-item">
                            <div class="employee-infos">
                                <span class="employee-username"><?= $employee['username']; ?></span>
                                <span class="employee-email"><?= $employee['email']; ?></span>
                            </div>
                            <div class="employee-btns">
                                <a href="edit-employee.php?id=<?= $employee['id']; ?>" class="modify-btn"><i class="far fa-edit"></i></a>
                                <a href="./actions/users/deleteEmployeesAction.php?id=<?= $employee['id']; ?>" class="delete-btn"><i class="fas fa-trash"></i></a>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
           

            <!--- MODAL 
            <div class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Ajouter un employé</h4>
                        <span class="close-modal"><i class="fas fa-times" id="close"></i></span>
                    </div>
                    <form class="add-modal" method="POST">
                        <label for="employeeUsername" class="modal-label">Nom d'utilisateur</label>
                        <input type="text" class="modal-input form_data" name="employeeUsername">
                        <label for="employeeEmail" class="modal-label">Adresse email</label>
                        <input type="text" class="modal-input form_data" name="employeeEmail">
                        <label for="employeePassword" class="modal-label">Mot de passe <span>(minimum 6 caractères, 1 Majuscule, 1 Chiffre, 1 Caractère spécial)</span></label>
                        <input type="text" class="modal-input form_data" name="employeePassword">
                        <button class="btn-add-modal" type="submit" name="createEmployee" id="submit">Ajouter</button>
                    </form> 
                </div>
            </div> --->

        </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>