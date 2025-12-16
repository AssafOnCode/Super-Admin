<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription : </title>
</head>
<body>
    <form action="./../controllers/inscription_controller.php" method="POST">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required><br><br>

        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required><br><br>

        <label for="metier">Métier :</label>
        <select name="metier" id="metier">
            <option value="developpeur">Développeur</option>
            <option value="designer">Designer</option>
            <option value="marketeur">Marketeur</option>
            <option value="boss">Boss</option>
        </select>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre email" required><br><br>

        <label for="mdp">Mot de passe :</label>
        <input type="mdp" id="mdp" name="mdp" placeholder="Entrez votre mot de passe" required><br><br>

        <input type="submit" value="S'inscrire">


    </form>
</body>
</html>