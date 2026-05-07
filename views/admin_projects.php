<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin · Projets</title>
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

    <nav class="nav-menu" aria-label="Navigation administration">
        <a href="admin.php" class="nav-item">Tableau de bord</a>
        <a href="admin_list_users.php" class="nav-item">Utilisateurs</a>
        <a href="admin_projects.php" class="nav-item nav-item--active" aria-current="page">Projects</a>
        <a href="admin_actualites.php" class="nav-item">Actualités</a>
    </nav>

    <a href="profil.php">
        <div class="user-profile">
            <span><p><?php echo $_SESSION['pseudo']; ?></p></span>
            <img src="/PROJECT/SuperAdmin/<?= $_SESSION['avatar']?>" height="50" width="50" alt="Avatar">
        </div>
    </a>
</div>

<main class="admin-dashboard-main">
</main>

</body>
</html>
