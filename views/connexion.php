<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./../css/connexion.css">
</head>
<body>

    <div class="container">
      
        <div class="logo">
            <img src="./../assets/superadmin.png" alt="Logo" />
        </div>

        <form action="./../controllers/connexion_controller.php" method="POST" class="forms">
            <h1>CONNEXION</h1>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Entrez votre email" required>
            </div>

            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe" required>
            </div>

            <input type="submit" value="Se connecter">
        </form>

       
        <form action="./inscription.php" method="POST">
            <input type="submit" value="S'inscrire" class="secondary-btn">
        </form> 
    </div>
<?php
    if (isset($_GET['deconnexion'])) {
    echo "Vous avez été déconnecté avec succès";
}
?>
</body>
</html>
