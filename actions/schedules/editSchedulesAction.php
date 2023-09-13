<?php

require ('actions/database.php');

if(isset($_POST['editHours'])){
    
            $new_am_open= htmlspecialchars($_POST['morningOpen']);
            $new_am_close= nl2br(htmlspecialchars($_POST['morningClose']));
            $new_pm_open= nl2br(htmlspecialchars($_POST['afternoonOpen']));
            $new_pm_close= htmlspecialchars($_POST['afternoonClose']);
    
            $editHours = $bdd->prepare('UPDATE schedules SET open_am = ?, close_am = ?, open_pm = ?, close_pm = ?');
            $editHours->execute(array($new_am_open, $new_am_close, $new_pm_open, $new_pm_close));
    
            echo '<script>
                    alert("La modification du compte à bien été effectuée");
                    window.location.href="hours.php";
                 </script>';

}

