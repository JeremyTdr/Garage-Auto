<?php 
require('actions/users/getEmployeesAction.php');
require('actions/securityAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>
        
        
        <div class="admin-section employees-management">
            <?php if($_SESSION['is_admin'] == "1"){ ?>
            
                <div class="admin-title">Liste des employés</div>

                <a href="./new-employee.php" class="create-btn" id="create-employee"><i class="fas fa-plus"></i> Ajouter un employé</a>
      
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
            <?php } else { ?>
            <p class="denied-msg">Vous n'avez pas accès à cette ressource</p>
            <?php } ?>
        </div>
        

        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>