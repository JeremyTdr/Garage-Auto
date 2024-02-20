<?php
require('actions/database.php');

// Validation du formulaire
if(isset($_POST['createOccasion'])){

    // Vérification si tous les champs sont complétés
    if(!empty($_POST['occasionTitle']) & !empty($_POST['occasionPrice']) & !empty($_POST['occasionYear']) & !empty($_POST['occasionKm']) & !empty($_POST['occasionDesc']) & !empty($_POST['occasionOptions'])){
    
        // ID utilisateur créateur de l'annonce   
        $userId = $_SESSION['id']; 

        // Données de l'annonce
        $occasion_title = htmlspecialchars($_POST['occasionTitle']);
        $occasion_price = htmlspecialchars($_POST['occasionPrice']);
        $occasion_year = htmlspecialchars($_POST['occasionYear']);
        $occasion_km = htmlspecialchars($_POST['occasionKm']);
        $occasion_description = nl2br(htmlspecialchars($_POST['occasionDesc']));
        $occasion_options = nl2br(htmlspecialchars($_POST['occasionOptions']));

        // Gestion de l'image    
        $file_name = $_FILES['occasionImg']['name'];
        $file_size = $_FILES['occasionImg']['size'];
        $tmp_name = $_FILES['occasionImg']['tmp_name'];
        $file_error = $_FILES['occasionImg']['error'];

        // Chemin de destination du fichier
        $file_location = "src/assets/uploads/".$file_name;

        if($file_error === 0) {
            if($file_size <= 5000000){
                    
                move_uploaded_file($tmp_name, $file_location);
                $imgMsg = "et votre image a bien été ajouté à l'annonce";

            } else {
                $imgMsg = "mais votre image ne doit pas dépasser 5Mo";
            }

        } else {
            $imgMsg = "mais une erreur est survenue lors de l'ajout de l'image";
        }

        // Ajout de l'annonce dans la BDD
        $addOccasion = $bdd->prepare('INSERT INTO offers(title, price, year, kms, description, options, img, id_employee)VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
        $addOccasion->execute(array($occasion_title, $occasion_price, $occasion_year, $occasion_km, $occasion_description, $occasion_options, $file_location, $userId));
        
        echo '<script>
                alert("Annonce ajoutée");
                window.location.href="occasions-admin.php";
            </script>';

    }
}