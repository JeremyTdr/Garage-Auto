<?php
require('actions/database.php');

// Gestion de l'image    
$file_name = $_FILES['occasionImg']['name'];
$file_size = $_FILES['occasionImg']['size'];
$tmp_name = $_FILES['occasionImg']['tmp_name'];
$file_error = $_FILES['occasionImg']['error'];

// Chemin de destination du fichier
$file_location = "src/assets/uploads/".$filename;

if($file_error === 0) {
    if($file_size <= 5000000){

        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);

        $new_file_name = 'CV-'.$userLogin.'.'.$file_ex_lc;
            
        move_uploaded_file($tmp_name, $file_location);

        

    } else {
        $imgMsg = "Votre fichier ne doit pas dépasser 5Mo";
    }

} else {
    $imgMsg = "Une erreur est survenue lors de l'ajout de l'image";
}