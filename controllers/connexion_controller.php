<?php
$mdp = $_POST['mdp'];
$email = $_POST['email'];

$bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');
$requete = $bdd->prepare("SELECT * FROM users WHERE email = :email AND mdp = :mdp");
$requete->execute(['email' => $email, 'mdp' => $mdp]);
$res = $requete->fetch();

if (isset($res['email']) && isset($res['mdp'])) {
    echo "Connected successfully to the connexion controller.";
    session_start();
    $_SESSION['pseudo'] = $res['prenom'];
    $_SESSION['email'] = $res['email'];
    $_SESSION['metier'] = $res['metier'];
    $_SESSION['id'] = $res['id'];
    $_SESSION['avatar'] = $res['avatar'];
    $_SESSION['nom'] = $res['nom'];
    $_SESSION['prenom'] = $res['prenom'];
    header('Location: ./../views/home.php');
} else {
    echo "Email or password is incorrect.";
}
?>





