<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./../css/inscription.css">
</head>
<body>

    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <img src="./../assets/superadmin.png" alt="Logo" />
        </div>

        <!-- Formulaire d'inscription -->
        <form action="./../controllers/inscription_controller.php" method="POST" class="forms">
            <h1>INSCRIPTION</h1>
            
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
            </div>

            <div class="form-group">
                <label for="metier">Métier</label>
                <select name="metier" id="metier" required>
                    <option value="">Sélectionnez votre métier</option>
                    <option value="developpeur">Développeur</option>
                    <option value="designer">Designer</option>
                    <option value="marketeur">Marketeur</option>
                    <option value="boss">Boss</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
            </div>

            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" placeholder="Entrez votre mot de passe" required>
            </div>

            <input type="submit" value="S'inscrire">
        </form>

        <!-- Bouton connexion -->
        <form action="./connexion.php" method="POST">
            <input type="submit" value="Se connecter" class="secondary-btn">
        </form> 
    </div>

</body>
</html>