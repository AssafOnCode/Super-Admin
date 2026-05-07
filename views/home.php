<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./../css/home.css">
</head>
<body>
    
<?php
session_start();
$pseudo = $_SESSION['pseudo'];
$avatar = $_SESSION['avatar'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$email = $_SESSION['email'];
$metier = $_SESSION['metier'];
$id = $_SESSION['id'];
?>

<div class="header">
    <a href="home.php">
        <div class="logo">
            <img src="./../assets/superadmin.png" height="50px" width="50px" alt="Logo">
        </div>
    </a>
    
    <nav class="nav-menu">
        <a href="profil.php" class="nav-item">Profil</a>
    </nav>

    <a href="./profil.php">
        <div class="user-profile">
            <span><p><?php echo $_SESSION['pseudo']; ?></p></span>
            <img src="/PROJECT/SuperAdmin/<?= $_SESSION['avatar'] ?>" height="50px" width="50px" alt="Avatar"> 
        </div>
    </a>
</div>
    
</body>
</html>