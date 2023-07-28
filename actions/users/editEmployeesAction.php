<?php

require ('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $userId = $_GET['id'];

    $checkIfUserExists = $bdd->prepare('SELECT * FROM employees WHERE id = ?');
    $checkIfUserExists->execute(array($userId));

    if($checkIfUserExists->rowCount() > 0){

        $userInfos = $checkIfUserExists->fetch();

        if($userInfos['id'] == $_GET['id']){

            $user_username = $userInfos['username'];
            $user_email = $userInfos['email'];
            $user_password = $userInfos['password'];
        }

    } else {
        $errorMsg = "Aucun utilisateur n'a été trouvée";
    }
}

if(isset($_POST['editEmployee'])){
    
    $new_user_username = htmlspecialchars($_POST['employeeUsername']);
    $new_user_email = htmlspecialchars($_POST['employeeEmail']);

    if (filter_var($new_user_email, FILTER_VALIDATE_EMAIL)) {

        $password = $_POST['employeePassword'];  

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 6) {
                
            $errorMsg = "Le mot de passe ne respecte pas les règles de conformité. Veuillez en saisir un nouveau.";

        } else {
            $new_user_password = password_hash($password, PASSWORD_DEFAULT);

            $editUser = $bdd->prepare('UPDATE employees SET username = ?, email = ?, password = ? WHERE id = ?');
            $editUser->execute(array($new_user_username, $new_user_email, $new_user_password, $userId));
        
            $successMsg = "La modification du compte à bien été effectuée";

            echo '<script>
                    alert("La modification du compte à bien été effectuée");
                    window.location.href="admin.php";
                 </script>';
        }

    } else {
        $errorMsg = "Veuillez renseigner une adresse email valide";
    } 
}
