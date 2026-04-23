

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="./../css/inscription.css">
</head>
<?php
session_start();
$pseudo = $_SESSION['pseudo'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$email = $_SESSION['email'];
$metier = $_SESSION['metier'];


?>
<body>

    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <img src="./../assets/superadmin.png" alt="Logo" />
        </div>

        <!-- Formulaire d'inscription -->
        <form action="./../controllers/modifier_controller.php" method="POST" class="forms">
            <h1>modifier</h1>
            
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom"value="<?php echo htmlspecialchars($nom); ?>" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($prenom); ?>" required>
            </div>

            <div class="form-group">
                <label for="metier">Métier</label>
                <select name="metier" id="metier" required>
                  <option value="developpeur" <?= $metier == 'developpeur' ? 'selected' : '' ?>>Développeur</option>
                  <option value="designer" <?= $metier == 'designer' ? 'selected' : '' ?>>Designer</option>
                  <option value="marketeur" <?= $metier == 'marketeur' ? 'selected' : '' ?>>Marketeur</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>

            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" placeholder=" Entrez votre mot de passe " required>
            </div>


            <input type="submit" value="enregistrer">
        </form>

        <!-- Bouton connexion -->
        <form action="./connexion.php" method="POST">
            <input type="submit" value="Se connecter" class="secondary-btn">
        </form> 
    </div>

</body>
</html>