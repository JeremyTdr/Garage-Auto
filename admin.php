<?php include 'pages/includes/html-head.php'; ?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section employees-management">
            
                <div class="admin-title">Liste des employés</div>

                <div class="create-employee open-modal" id="create-employee"><i class="fas fa-plus"></i> Ajouter un employé</div>
                
                <ul class="employees-list">    
                    <li class="list-item">
                        <div class="employee-infos">
                            <span class="employee-username">Username</span>
                            <span class="employee-email">Email</span>
                        </div>
                        <div class="employee-btns">
                            <button class="modify-btn"><i class="far fa-edit"></i></button>
                            <button class="delete-btn"><i class="fas fa-trash"></i></button>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="employee-infos">
                            <span class="employee-username">Username</span>
                            <span class="employee-email">Email</span>
                        </div>
                        <div class="employee-btns">
                            <button class="modify-btn"><i class="far fa-edit"></i></button>
                            <button class="delete-btn"><i class="fas fa-trash"></i></button>
                        </div>
                    </li>

                </ul>
           

            <!--- MODAL --->
            <div class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Ajouter un employé</h4>
                        <span class="close-modal"><i class="fas fa-times" id="close"></i></span>
                    </div>
                    <form class="add-modal" method="POST">
                        <label for="employeeUsername" class="modal-label">Nom d'utilisateur</label>
                        <input type="text" class="modal-input" name="employeeUsername">
                        <label for="employeeEmail" class="modal-label">Adresse email</label>
                        <input type="text" class="modal-input" name="employeeEmail">
                        <label for="employeePassword" class="modal-label">Mot de passe</label>
                        <input type="text" class="modal-input" name="employeePassword">
                        <button class="btn-add-modal" type="submit" name="createEmployee">Ajouter</button>
                    </form>
                    
                </div>
            </div>

        </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>
    </body>
</html>