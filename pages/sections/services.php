<?php
require('actions/services/getServicesAction.php');
?>
<section class="services" id="services">
    <div class="content services-content">
        <h2>Nos services</h2>
        <div class="services-cards">
            <?php while($service = $getServices->fetch()){ ?>
                <div class="service-card">
                    <div class="service-card-title"><?= $service['title']; ?></div>
                    <hr>
                    <div class="service-card-description"><?= $service['description']; ?></div>
                </div>    
            <?php } ?>
        </div>
    </div>
</section>