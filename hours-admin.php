<?php 
require('actions/securityAction.php');
require('./actions/schedules/getSchedules.php');
include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section hours-management">
        
        <?php if($_SESSION['is_admin'] == "1"){ ?>
            
                <div class="admin-title">Horaires du garage</div>

                <table class="schedules-table">
                    <tr class="table-titles">
                        <th>Jour</th> 
                        <th>Matin</th> 
                        <th>Aprés-midi</th> 
                    </tr>
                    
                    <?php while($schedule = $getSchedules->fetch()){?>
                        <tr class="table-contents">    
                            <td class="schedule-day"><?= $schedule['day']; ?></td>
                            <td class="schedule-day"><?php if($schedule['open_am'] == 'Fermé'){echo 'Fermé';} else { echo $schedule['open_am']; ?>-<?= $schedule['close_am']; }?></td>
                            <td class="schedule-day"><?php if($schedule['open_pm'] == 'Fermé'){echo 'Fermé';} else { echo $schedule['open_pm']; ?>-<?= $schedule['close_pm']; }?></td>
                        </tr>  
                    <?php } ?>
                </table>
                
                <a href="edit-hours.php" class="modify-btn">Modifier</a>
            
            <?php } else { ?>
            <p class="denied-msg">Vous n'avez pas accès à cette ressource</p>
            <?php } ?>
            
        </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>