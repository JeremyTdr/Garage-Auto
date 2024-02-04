<?php
    require('./actions/schedules/getSchedules.php');
?>

<footer>
    <div class="footer-items">
        <div class="footer-infos">
            <div class="footer-copyright">Copyright <i class="far fa-copyright"></i> 2023 | Garage Auto V. Parrot</div>
            <div class="footer-copyright-bis">Tous droits reservés</div>
            <div class="footer-terms">Conditions générales</div>
        </div>

        <div class="footer-contact">
            <h3>Informations</h3>
            <ul class="contact-infos">
                <li class="contact-info"><i class="fas fa-map-marker-alt"></i>1 av. de Paris - 75000, Paris</li>
                <li class="contact-info"><i class="fas fa-mobile-alt"></i>01 02 03 04 05</li>
                <li class="contact-info"><i class="fas fa-envelope"></i>contact@garage-parrot.fr</li>
            </ul>
        </div>

        <div class="footer-schedules">
            <h3>Horaires d'ouverture</h3>
            <ul class="schedules-list">
                <?php while($schedule = $getSchedules->fetch()){?>
                <li class="schedule">
                    <div class="schedule-day"><?= $schedule['day']; ?> :</div>

                    <div class="schedule-hours">
                        <?php if($schedule['open_am'] == 'Fermé'){echo 'Fermé';} else { echo $schedule['open_am']; ?>-<?= $schedule['close_am']; }?> | <?php if($schedule['open_pm'] == 'Fermé'){echo 'Fermé';} else { echo $schedule['open_pm']; ?>-<?= $schedule['close_pm']; }?></div> 
                </li> 
                <?php
            
            } ?>
            </ul>
        </div>
    </div>
</footer>