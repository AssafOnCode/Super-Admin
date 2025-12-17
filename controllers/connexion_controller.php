<?php
$mdp = $_POST['mdp'];
$email = $_POST['email'];

$bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');
$requete = $bdd->prepare("SELECT * FROM users WHERE email = :email AND mdp = :mdp");
$requete->execute(['email' => $email, 'mdp' => $mdp]);
$res = $requete->fetch();

if (isset($res['email']) && isset($res['mdp'])) {
    echo "Connected successfully to the connexion controller.";
    header('Location: ./../views/home.php');
} else {
    echo "Email or password is incorrect.";
}
?>