<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin · Liste des utilisateurs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../css/admin_list_users.css">
</head>
<body>
<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');
$requete = $bdd->prepare("SELECT * FROM users");
$requete->execute();
$users = $requete->fetchAll();

?>

<div class="header">
    <a href="home.php">
        <div class="logo">
            <img src="./../assets/superadminor.png" height="50" width="50" alt="Logo">
        </div>
    </a>

    <nav class="nav-menu" aria-label="Navigation administration">
        <a href="admin.php" class="nav-item">Tableau de bord</a>
        <a href="admin_list_users.php" class="nav-item nav-item--active" aria-current="page">Utilisateurs</a>
        <a href="admin_projects.php" class="nav-item">Projects</a>
        <a href="admin_actualites.php" class="nav-item">Actualités</a>
    </nav>

    <a href="profil.php">
        <div class="user-profile">
            <span><p><?php echo $_SESSION['pseudo']; ?></p></span>
            <img src="/PROJECT/SuperAdmin/<?= $_SESSION['avatar'] ?>" height="50" width="50" alt="Avatar">
        </div>
    </a>
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Métier</th>
            <th>Email</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td><?php echo htmlspecialchars((string) $user['id'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars((string) $user['nom'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars((string) $user['prenom'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars((string) $user['metier'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars((string) $user['email'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td>
            <?php if ($user['metier'] != "Admin") { ?>
            <a href="./../controllers/admin_profilsupprimer_controller.php?id=<?php echo (int) $user['id']; ?>">Supprimer</a>
            <?php } ?>
            </td>
        </tr>
        <?php 
        } ?>
    </tbody>
</table>

</body>
</html>
