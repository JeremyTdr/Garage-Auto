<?php 
require('actions/securityAction.php');
require('actions/services/getServicesAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
            <?php include 'pages/includes/navbar-admin.php'; ?>

            <div class="admin-section services-management">
                
                    <div class="admin-title">Liste des services</div>
                    <a href="./new-service.php" class="create-btn" id="create-service"><i class="fas fa-plus"></i> Ajouter un service</a>

                    <ul class="services-list">
                    <?php while($service = $getServices->fetch()){ ?>
                        <li class="list-item">
                            <div class="service-infos">
                                <span class="service-title"><?= $service['title']; ?></span>
                            </div>
                            <div class="service-btns">
                                <a href="edit-service.php?id=<?= $service['id']; ?>" class="modify-btn"><i class="far fa-edit"></i></a>
                                <a href="./actions/services/deleteServiceAction.php?id=<?= $service['id']; ?>" class="delete-btn"><i class="fas fa-trash"></i></a>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>