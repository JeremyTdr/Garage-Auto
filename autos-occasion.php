<?php 
require('actions/cars/getOccasionsAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
            <?php include 'pages/includes/navbar.php'; ?>

            <div class="admin-section occasions-management">
                
                    <h2 class="page-title">Liste des occasions</h2>

                    <div class="occasions-list">
                        <?php while($occasion = $getOccasions->fetch()){ ?>
                            <div class="occasions-card" onclick="location.href='/occasion-details.php?id=<?= $occasion['id']; ?>'">
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
                            </div>
                            
                        <?php } ?>
                    </div>
            </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>