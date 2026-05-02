<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin · Tableau de bord</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../css/admin.css">
</head>
<body>
<?php
session_start();

?>

<div class="header">
    <a href="home.php">
        <div class="logo">
            <img src="./../assets/superadminor.png" height="50" width="50" alt="Logo">
        </div>
    </a>

    <nav class="nav-menu">
        <span class="nav-item">ADMIN - TABLEAU DE BORD</span>
    </nav>

    <a href="profil.php">
        <div class="user-profile">
            <span><p><?php echo $_SESSION['pseudo']; ?></p></span>
            <img src="/PROJECT/SuperAdmin/<?= $_SESSION['avatar'] ?>" height="50" width="50" alt="Avatar">
        </div>
    </a>
</div>

<main class="admin-dashboard-main">
    <a href="admin_list_users.php" class="btn-users-list">Voir liste utilisateurs</a>
    <br>
    <br>
    <a href="admin_projects.php" class="btn-users-list">PROJETS</a>
    <br>
    <br>
    <a href="admin_actualites.php" class="btn-users-list">ACTUALITÉS</a>
</main>

</body>
</html>
