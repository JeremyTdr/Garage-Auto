<?php 
require('actions/securityAction.php');
require('actions/users/getEmployeesAction.php');
include 'pages/includes/html-head.php';
?>

    <body>
        <?php include 'pages/includes/navbar-admin.php'; ?>

        <div class="admin-section admin-console">
            
            <div class="admin-title">Centre d'administration</div>
            <p class="admin-text">Bienvenue dans le centre d'administration du Garage Parrot.</p>
            <br>
            <p class="admin-text">Ici, vous pouvez naviguer dans vos différents onglets pour administrer le site web du garage.</p>
                
        </div>
    
        <!-- JS -->
        <script src="./src/js/app.js"></script>

    </body>
</html>