<?php 
require('actions/securityAction.php');
require('./actions/schedules/getSchedules.php');
require('./actions/schedules/editSchedulesAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section edit-hours">

            <?php if($_SESSION['is_admin'] == "1"){ ?>

            <div class="admin-title">Modifier les horaires</div>

                <form class="form-edit-hours" method="POST" enctype="multipart/form-data">
                    <a href="./hours-admin.php" class="return-btn"><i class="fas fa-chevron-left"></i> Retour</a>
            
                    <?php 
                        while($schedule = $getSchedules->fetch()){
                    ?>
                        <div class="hours-day"><?= $schedule['day']; ?></div>

                        <div class="select-hours">
                            <label for="hours-morning">Matin :</label>
                            <select name="morningOpen" id="morning-open-select">
                                <option value=""><?php if($schedule['open_am'] == 'Fermé'){echo 'Fermé';} else { echo $schedule['open_am']; }?></option>
                                <option value="8h">8h</option>
                                <option value="8h30">8h30</option>
                                <option value="9h">9h</option>
                                <option value="9h30">9h30</option>
                                <option value="10h">10h</option>
                                <option value="10h30">10h30</option>
                                <option value="11h">11h</option>
                                <option value="11h30">11h30</option>
                                <option value="12h">12h</option>
                                <option value="12h30">12h30</option>
                                <option value="13h">13h</option>
                                <option value="13h30">13h30</option>
                                <option value="14h">14h</option>
                                <option value="Fermé">Fermé</option>
                            </select>
                            <span>-</span>
                            <select name="morningClose" id="morning-close-select">
                                <option value=""><?php if($schedule['close_am'] == 'Fermé'){echo 'Fermé';} else { echo $schedule['close_am']; }?></option>
                                <option value="8h">8h</option>
                                <option value="8h30">8h30</option>
                                <option value="9h">9h</option>
                                <option value="9h30">9h30</option>
                                <option value="10h">10h</option>
                                <option value="10h30">10h30</option>
                                <option value="11h">11h</option>
                                <option value="11h30">11h30</option>
                                <option value="12h">12h</option>
                                <option value="12h30">12h30</option>
                                <option value="13h">13h</option>
                                <option value="13h30">13h30</option>
                                <option value="14h">14h</option>
                                <option value="Fermé">Fermé</option>
                            </select>
                        </div>
                        <br>
                        <div class="select-hours">
                        <label for="hours-afternoon">Après-midi :</label>
                        <select name="afternoonOpen" id="afternoon-open-select">
                            <option value=""><?php if($schedule['open_pm'] == 'Fermé'){echo 'Fermé';} else { echo $schedule['open_pm']; }?></option>
                            <option value="12h">12h</option>
                            <option value="12h30">12h30</option>
                            <option value="13h">13h</option>
                            <option value="13h30">13h30</option>
                            <option value="14h">14h</option>
                            <option value="14h30">14h30</option>
                            <option value="15h">15h</option>
                            <option value="15h30">15h30</option>
                            <option value="16h">16h</option>
                            <option value="16h30">16h30</option>
                            <option value="17h">17h</option>
                            <option value="17h30">17h30</option>
                            <option value="18h">18h</option>
                            <option value="18h30">18h30</option>
                            <option value="19h">19h</option>
                            <option value="19h30">19h30</option>
                            <option value="20h">20h</option>
                            <option value="Fermé">Fermé</option>
                        </select>
                        <span>-</span>
                        <select name="afternoonClose" id="afternoon-close-select">
                            <option value=""><?php if($schedule['close_pm'] == 'Fermé'){echo 'Fermé';} else { echo $schedule['close_pm']; }?></option>
                            <option value="12h">12h</option>
                            <option value="12h30">12h30</option>
                            <option value="13h">13h</option>
                            <option value="13h30">13h30</option>
                            <option value="14h">14h</option>
                            <option value="14h30">14h30</option>
                            <option value="15h">15h</option>
                            <option value="15h30">15h30</option>
                            <option value="16h">16h</option>
                            <option value="16h30">16h30</option>
                            <option value="17h">17h</option>
                            <option value="17h30">17h30</option>
                            <option value="18h">18h</option>
                            <option value="18h30">18h30</option>
                            <option value="19h">19h</option>
                            <option value="19h30">19h30</option>
                            <option value="20h">20h</option>
                            <option value="Fermé">Fermé</option>
                        </select>
                        
                    </div>
                    <?php } ?>

                    <br><br>
                    <button class="apply-edit-hours" type="submit" name="editHours" id="submit">Appliquer</button>
                </form>

                <?php } else { ?>
                <p class="denied-msg">Vous n'avez pas accès à cette ressource</p>
                <?php } ?>
        </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>