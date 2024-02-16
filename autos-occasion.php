<?php 
require('actions/cars/getOccasionsAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
            <?php include 'pages/includes/navbar.php'; ?>

            <div class="admin-section occasions-management">
                
                    <h2 class="page-title">Liste des occasions</h2>

                    <div class="filter-section">
                        <form class="filter-content" method="POST">
                            <div class="filters">
                                <div class="filter">
                                    <label for="yearFilter" class="modal-label">Année :</label>
                                    <input type="text" class="modal-input form_data" name="yearMin" placeholder="Min">
                                    <span>-</span>
                                    <input type="text" class="modal-input form_data" name="yearMax" placeholder="Max">
                                </div>
                                <div class="filter">
                                    <label for="priceFilter" class="modal-label">Prix :</label>
                                    <input type="text" class="modal-input form_data" name="priceMin" placeholder="Min">
                                    <span>-</span>
                                    <input type="text" class="modal-input form_data" name="priceMax" placeholder="Max">
                                </div>
                                <div class="filter">
                                    <label for="kmsFilter" class="modal-label">Kilométrage :</label>
                                    <input type="text" class="modal-input form_data" name="kmsMin" placeholder="Min">
                                    <span>-</span>
                                    <input type="text" class="modal-input form_data" name="kmsMax" placeholder="Max">
                                </div>
                            </div>
                            
                            <button type="button" class="filter-btn"><i class="fas fa-plus"></i> Filtrer</button>
                        </form>   
                    </div>

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