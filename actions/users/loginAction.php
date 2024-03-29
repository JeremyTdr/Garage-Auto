<?php
session_start();
require('actions/database.php');

// Validation du formulaire
if(isset($_POST['login'])){

    // Vérification si tous les champs sont complétés
    if(!empty($_POST['userLogin']) AND !empty($_POST['userPassword'])){

        // Données de l'user
        $user_login = htmlspecialchars($_POST['userLogin']);
        $user_password = htmlspecialchars($_POST['userPassword']);


        $checkIfUserExists = $bdd->prepare('SELECT * FROM employees WHERE email = ?');
        $checkIfUserExists->execute(array($user_login));

        // Vérification si login user existe
        if($checkIfUserExists->rowCount() > 0){

            // Vérification si mdp est correct
            $userInfos = $checkIfUserExists->fetch();
            if(password_verify($user_password, $userInfos['password'])){

                // Authentifier l'user et démarrer sa session
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['id'];
                $_SESSION['username'] = $userInfos['username'];
                $_SESSION['email'] = $userInfos['email'];
                $_SESSION['is_admin'] = $userInfos['is_admin'];

                // Redirection vers la page d'accueil après démarrage session
                header('Location: admin.php');

            } else {
                $errorMsg = "Mot de passe saisit incorrect";
            }

        } else {
            $errorMsg = "Ce compte n'existe pas";
        } 

    } else {
        $errorMsg = "Veuillez completer tous les champs";
    }
}