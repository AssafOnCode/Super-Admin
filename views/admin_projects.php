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
    <link rel="stylesheet" href="./../css/admin_projects.css">
</head>
<body class="page-projects">
<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');

$requetedev = $bdd->prepare("SELECT * FROM users where metier = 'developpeur'");
$requetedev->execute();
$devs = $requetedev->fetchAll();

$requetemkt = $bdd->prepare("SELECT * FROM users where metier = 'marketeur'");
$requetemkt->execute();
$mkts = $requetemkt->fetchAll();

$requetedsg = $bdd->prepare("SELECT * FROM users where metier = 'designer'");
$requetedsg->execute();
$dsgs = $requetedsg->fetchAll();



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
        <a href="admin_projects.php" class="nav-item nav-item--active" aria-current="page">Projets</a>
        <a href="admin_actualites.php" class="nav-item">Actualités</a>
    </nav>

    <a href="profil.php">
        <div class="user-profile">
            <span><p><?php echo $_SESSION['pseudo']; ?></p></span>
            <img src="/PROJECT/SuperAdmin/<?= $_SESSION['avatar']?>" height="50" width="50" alt="Avatar">
        </div>
    </a>
</div>

<main class="admin-dashboard-main admin-dashboard-main--projects">
    <div class="projects-page">
        <header class="projects-page__header projects-page__header--hero">
            <p class="projects-page__eyebrow">Administration</p>
            <h1 class="projects-page__title">Nouveau projet</h1>
            <p class="projects-page__intro">Renseignez le projet et assignez l’équipe. Listes multiples : <kbd>Cmd</kbd> (Mac) ou <kbd>Ctrl</kbd> (Windows) + clic.</p>
        </header>

        <form class="projects-form" action="./../controllers/admin_projects_controller.php" method="POST" enctype="multipart/form-data">
            <div class="projects-page__basics">
                <input type="text" name="nom" placeholder="Nom du projet" autocomplete="off">
                <input type="text" name="temps" placeholder="Temps de réalisation" autocomplete="off">
                <input type="text" name="descriptions" placeholder="Descriptions" autocomplete="off">
            </div>

            <section class="projects-page__team" aria-label="Membres du projet">
                <p class="projects-page__team-title">Équipe</p>
                <h2 class="projects-page__team-heading">Rôles et participants</h2>
                <div class="projects-page__team-grid">
                    
                <div class="projects-field projects-field--dev">
                        <label class="projects-field__label" for="sel-dev">Développeur</label>
                        <select id="sel-dev" name="developpeur[]" multiple class="projects-select" size="6">
                            <?php foreach ($devs as $dev) { ?>
                                <option value="<?=$dev['id']?>"><?=$dev['nom']?>, <?=$dev['prenom']?>, <?=$dev['metier']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="projects-field projects-field--mkt">
                        <label class="projects-field__label" for="sel-mkt">Marketeur</label>
                        <select id="sel-mkt" name="marketeur[]" multiple class="projects-select" size="6">
                            <?php foreach ($mkts as $mkt) { ?>
                                <option value="<?=$mkt['id']?>"><?=$mkt['nom']?>, <?=$mkt['prenom']?>, <?=$mkt['metier']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="projects-field projects-field--dsg">
                        <label class="projects-field__label" for="sel-dsg">Designer</label>
                        <select id="sel-dsg" name="designer[]" multiple class="projects-select" size="6">
                            <?php foreach ($dsgs as $dsg) { ?>
                                <option value="<?=$dsg['id']?>"><?=$dsg['nom']?>, <?=$dsg['prenom']?>, <?=$dsg['metier']?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </section>

            <div class="projects-page__actions">
                <input type="submit" value="Valider" class="projects-form__submit">
            </div>
        </form>
    </div>
</main>

<?php foreach ($projets as $projet) { ?>
<option value="<?=$projet['id']?>"><?=$projet['nom']?>, <?=$projet['temps']?>, <?=$projet['descriptions']?></option>
<?php } ?>

</body>
</html>
