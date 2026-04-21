<?php

session_start();

$id = $_SESSION['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$metier = $_POST['metier'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

if ($metier == 'developer') {
    $avatar = '/assets/dev.png';
} elseif ($metier == 'designer') {
    $avatar = '/assets/design.png';
} else {
    $avatar = '/assets/marketteur.png';
}

$bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');
$requete = $bdd->prepare("SELECT * FROM users WHERE email = :email");
$requete->execute(['email' => $email]);
$res = $requete->fetch();

if (! isset($res['email'])) {
    $requeteverif = $bdd->prepare("UPDATE users SET nom='$nom' , prenom ='$prenom' ,metier='$metier' ,email='$email' ,mdp='$mdp', avatar = '$avatar' WHERE id = :id ");
    $requeteverif->execute(['id' => $id]);
    echo "Modification réussie !";
} else {
    echo "Cet email est déjà utilisé.";
}

?>