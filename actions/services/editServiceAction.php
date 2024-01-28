<?php

require ('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $serviceId = $_GET['id'];

    $checkIfServiceExists = $bdd->prepare('SELECT * FROM services WHERE id = ?');
    $checkIfServiceExists->execute(array($serviceId));

    if($checkIfServiceExists->rowCount() > 0){

        $serviceInfos = $checkIfServiceExists->fetch();

        if($serviceInfos['id'] == $_GET['id']){

            $service_title = $serviceInfos['title'];
            $service_description = $serviceInfos['description'];

        }

    } else {
        $errorMsg = "Aucun service n'a été trouvée";
    }


    if(isset($_POST['editService'])){

        $new_service_title = htmlspecialchars($_POST['serviceTitle']);
        $new_service_description = htmlspecialchars($_POST['serviceDesc']);        

        $editService = $bdd->prepare('UPDATE services SET title = ?, description = ? WHERE id = ?');
        $editService->execute(array($new_service_title, $new_service_description, $serviceId));

        echo '<script>
                alert("La modification a bien été effectuée");
                window.location.href="services-admin.php";
            </script>';
            

    } 

}