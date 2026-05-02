<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketeur - Mes projets</title>
    <link rel="stylesheet" href="./../css/marketeur.css">
</head>
<body>
<?php
session_start();
?>

<div class="header">
    <a href="home.php">
        <div class="logo">
            <img src="./../assets/superadmin.png" height="50" width="50" alt="Logo">
        </div>
    </a>

    <nav class="nav-menu">
        <span class="nav-item">MARKETEUR - MES PROJETS</span>
    </nav>

    <a href="profil.php">
        <div class="user-profile">
            <span><p><?php echo $_SESSION['pseudo']; ?></p></span>
            <img src="/PROJECT/SuperAdmin/<?= $_SESSION['avatar'] ?>" height="50" width="50" alt="Avatar">
        </div>
    </a>
</div>

</body>
</html>