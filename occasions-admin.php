<?php 
require('actions/securityAction.php');
require('actions/cars/getOccasionsAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
            <?php include 'pages/includes/navbar-admin.php'; ?>

            <div class="admin-section occasions-management">
                
                    <div class="admin-title">Liste des occasions</div>
                    <a href="./new-occasion.php" class="create-btn" id="create-occasion"><i class="fas fa-plus"></i> Ajouter une annonce</a>

                    <div class="occasions-list">
                        <?php while($occasion = $getOccasions->fetch()){ ?>
                            <div class="occasions-card" onclick="location.href='/occasion-admin-details.php?id=<?= $occasion['id']; ?>'">
                                <div class="occasions-img" >
                                    <img src="<?= $occasion['img']; ?>"></img>
                                </div>    
                                <div class="occasions-infos">
                                    <div class="occasions-title"><?= $occasion['title']; ?></div>
                                    <ul class="occasions-specs">
                                        <li><?= $occasion['year']; ?></li>
                                        <li><?= $occasion['price']; ?> €</li>
                                        <li><?= $occasion['kms']; ?> Km</li>
                                    </ul>
                                </div>
                                <div class="occasions-btns">
                                    <a href="edit-occasion.php?id=<?= $occasion['id']; ?>" class="modify-btn">Modifier</a>
                                    <a href="./actions/cars/deleteOccasionAction.php?id=<?= $occasion['id']; ?>" class="delete-btn">Supprimer</a>
                                </div>
                            </div>
                            
                        <?php } ?>
                    </div>
            </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>