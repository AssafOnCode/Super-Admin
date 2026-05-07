<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin · Actualités</title>
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
        <a href="admin_projects.php" class="nav-item">Projets</a>
        <a href="admin_actualites.php" class="nav-item nav-item--active" aria-current="page">Actualités</a>
    </nav>

    <a href="profil.php">
        <div class="user-profile">
            <span><p><?php echo $_SESSION['pseudo']; ?></p></span>
            <img src="/PROJECT/SuperAdmin/<?= $_SESSION['avatar'] ?>" height="50" width="50" alt="Avatar">
        </div>
    </a>
</div>

<main class="admin-dashboard-main">
</main>

<form action="./../controllers/admin_actualites_controller.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="titre" placeholder="Titre">
    <input type="text" name="contenu" placeholder="écrivez votre actualité">
    <label for="image">Image (JPG, PNG, GIF, WebP)</label>
    <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/gif,image/webp,.jpg,.jpeg,.png,.gif,.webp">
    <input type="submit" value="Publier">
</form>

</body>
</html>
