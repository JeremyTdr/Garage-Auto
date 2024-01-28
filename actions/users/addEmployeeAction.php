<?php
require('actions/database.php');

// Validation du formulaire
if(isset($_POST['createEmployee'])){

    // Vérification si tous les champs sont complétés
    if(!empty($_POST['employeeUsername']) & !empty($_POST['employeeEmail']) & !empty($_POST['employeePassword'])){

        // Données de l'employé
        $employee_username = htmlspecialchars($_POST['employeeUsername']);
        $employee_email = htmlspecialchars($_POST['employeeEmail']);

        if (filter_var($employee_email, FILTER_VALIDATE_EMAIL)) {

            // Validation du password
            $password = $_POST['employeePassword'];

            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 6) {
                
                $errorMsg = "Le mot de passe ne respecte pas les règles de conformité. Veuillez en saisir un nouveau";

            } else {
                $employee_password = password_hash($password, PASSWORD_DEFAULT);
        
                // Verification si user déjà existant
                $checkUserAlreadyExists = $bdd->prepare('SELECT username FROM employees WHERE username = ?');
                $checkUserAlreadyExists->execute(array($employee_username));

                if($checkUserAlreadyExists->rowCount() == 0){

                    // Ajout de l'user dans la BDD
                    $addEmployee = $bdd->prepare('INSERT INTO employees(username, email, password)VALUES(?, ?, ?)');
                    $addEmployee->execute(array($employee_username, $employee_email, $employee_password));
                      
                    echo '<script>
                            alert("Le compte a bien été ajouté");
                            window.location.href="admin.php";
                        </script>';

                } else {
                    $errorMsg = "Cet utilisateur existe déjà";
                }
            }
        } else {
            $errorMsg = "Veuillez renseigner une adresse email valide";
        } 
    }
}