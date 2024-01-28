<?php
require('actions/database.php');

// Validation du formulaire
if(isset($_POST['createService'])){

    // Vérification si tous les champs sont complétés
    if(!empty($_POST['serviceTitle']) & !empty($_POST['serviceDesc'])){

        // Données du service
        $service_title = htmlspecialchars($_POST['serviceTitle']);
        $service_description = htmlspecialchars($_POST['serviceDesc']);

        // Ajout du service dans la BDD
        $addService = $bdd->prepare('INSERT INTO services(title, description)VALUES(?, ?)');
        $addService->execute(array($service_title, $service_description));
          
        echo '<script>
                alert("Le service a bien été ajouté");
                window.location.href="services-admin.php";
            </script>';
    
    } else {
        $errorMsg = "Veuillez renseigner tous les champs";
    }
}
