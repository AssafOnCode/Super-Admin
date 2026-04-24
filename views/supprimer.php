<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Profil</title>
    <link rel="stylesheet" href="./../css/supprimer.css">
</head>
<body>
    
<header class="header">
    <a href="home.php" class="logo">
        <img src="./../assets/superadmin.png" height="50" width="50" alt="Logo">
    </a>

    <nav class="nav-menu">
        <a href="profil.php" class="nav-item">Profil</a>
        <a href="modifier.php" class="nav-item">Modifier</a>
        <a href="deconnexion.php" class="nav-item">Se déconnecter</a>
    </nav>
</header>

<main class="page-content">
    <div class="container">
        <form action="./../controllers/supprimer_controller.php" method="POST" class="forms">
            <h1>Supprimer</h1>
            <p>Voulez-vous vraiment supprimer votre compte ?</p>
            <input type="submit" class="btn-delete" value="Oui, supprimer">
        </form>

    <form action="profil.php" method="post">
        <input type="submit" class="btn-cancel" value="NON">
    </form>
</div>
    
</body>
</html>