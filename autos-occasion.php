<?php 
require('actions/cars/getOccasionsAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
            <?php include 'pages/includes/navbar.php'; ?>

            <div class="admin-section occasions-management">
                
                    <h2 class="page-title">Liste des occasions</h2>

                    <div class="filter-section">
                        <form class="filter-content" method="GET">
                            <div class="filters">
                                <div class="filter">
                                    <label for="yearFilter" class="modal-label">Année :</label>
                                    <input type="text" name="yearMin" placeholder="Min" value="<?php if(isset($_GET['yearMin'])){echo $_GET['yearMin'];} else {echo '0';}?>">
                                    <span>-</span>
                                    <input type="text" name="yearMax" placeholder="Max" value="<?php if(isset($_GET['yearMax'])){echo $_GET['yearMax'];} else {echo '2024';}?>">
                                </div>
                                <div class="filter">
                                    <label for="priceFilter" class="modal-label">Prix :</label>
                                    <input type="text" name="priceMin" placeholder="Min" value="<?php if(isset($_GET['priceMin'])){echo $_GET['priceMin'];} else {echo '0';}?>">
                                    <span>-</span>
                                    <input type="text" name="priceMax" placeholder="Max" value="<?php if(isset($_GET['priceMax'])){echo $_GET['priceMax'];} else {echo '90000';}?>">
                                </div>
                                <div class="filter">
                                    <label for="kmsFilter" class="modal-label">Kilométrage :</label>
                                    <input type="text" name="kmsMin" placeholder="Min" value="<?php if(isset($_GET['kmsMin'])){echo $_GET['kmsMin'];} else {echo '0';}?>">
                                    <span>-</span>
                                    <input type="text" name="kmsMax" placeholder="Max" value="<?php if(isset($_GET['kmsMax'])){echo $_GET['kmsMax'];} else {echo '300000';}?>">
                                </div>
                            </div>
                            
                            <div class="filter-btns">
                                <button type="submit" class="filter-btn"><i class="fas fa-plus"></i> Filtrer</button>
                                <a class="filter-btn" href="/autos-occasion.php"><i class="fas fa-minus"></i> Supprimer les filtres</a>
                            </div>
                            
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