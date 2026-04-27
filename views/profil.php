<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../css/profil.css">
</head>
<body class="profil-page">
    
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
            <img src="../assets/superadmin.png" height="50px" width="50px" alt="Logo">
        </div>
    </a>
</div>


<main class="center-links">
    <a href="supprimer.php" class="nav-item">Supprimer</a>
    <a href="modifier.php" class="nav-item">Modifier</a>
    <a href="deconnexion.php" class="nav-item">Se déconnecter</a>
    <?php if ($metier == 'admin') { ?>
    <a href="admin.php" class="nav-item">Tableau de bord</a>
    <?php } elseif ($metier == 'designer') { ?>
    <a href="designer.php" class="nav-item">Mes projets</a>
    <?php } elseif ($metier == 'developpeur') { ?>
    <a href="developpeur.php" class="nav-item">Mes projets</a>
    <?php } elseif ($metier == 'marketteur') { ?>
    <a href="marketteur.php" class="nav-item">Mes projets</a>
    <?php } else { ?>
    <a href="home.php" class="nav-item">Retour à la page d'accueil</a>
    <?php } ?>
</main>


</body>
</html>