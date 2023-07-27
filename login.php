<?php require('actions/users/loginAction.php'); ?>

<!-- head HTML -->
<?php include 'pages/includes/html-head.php'; ?>
    <!-- body HTML & foot HTML -->
    <body>
        <div class="form-content">
            <form class="form-login" method="POST">
                <img class="logo" src="./src/assets/logo-nobg.png" alt="logo du garage">
                <h1>Garage Auto V. Parrot</h1>
                <p>Centre d'administration</p>
                <div class="login-input-contents">
                    <div class="login-input">
                        <label for="userLogin" class="form-label">Adresse email</label>
                        <input type="text" class="form-control" name="userLogin">
                    </div>
                    <div class="login-input">
                        <label for="userPassword" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="userPassword">
                    </div>
                </div>
                <span class="errorMsg"><?php if(isset($errorMsg)){ echo $errorMsg; } ?></span>
                <button type="submit" class="login-btn" name="login">Se connecter</button>
            </form>
        </div>
    </body>
</html>