<nav class="nav">

    <img class="logo" src="src/assets/logo-nobg.png" alt="logo du garage"></img>  
    <span onclick="location.href='/admin.php'">Centre d'administration</span>  

    <div class="nav-items" id="nav-items">
        <?php
        if($_SESSION['is_admin'] == "1"){
            ?>
            <a class="nav-item" href="/employes-admin.php">Employes</a>
            <a class="nav-item" href="/services-admin.php">Services</a>
            <a class="nav-item" href="/occasions-admin.php">Occasions</a>
            <a class="nav-item" href="/hours-admin.php">Horaires</a>
        <?php 
        } elseif ($_SESSION['is_admin'] == "0"){
            ?>
            <a class="nav-item" href="/occasions-admin.php">Occasions</a>
            <?php } ?>
        
        <a class="nav-item logout-btn" href="./actions/users/logoutAction.php">Deconnexion</a>     
    </div>

    <i class="fas fa-bars burger-btn" id="burger-btn"></i>
    
</nav>