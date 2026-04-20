<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$metier = $_POST['metier'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

$bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');
$requeteverif = $bdd->prepare("SELECT * FROM users WHERE email = :email");
$requeteverif->execute(['email' => $email]);
$res = $requeteverif->fetch();


if ($metier == 'developer') {
    $avatar = '/assets/dev.png';
} elseif ($metier == 'designer') {
    $avatar = '/assets/design.png';
} else {
    $avatar = '/assets/marketteur.png';
}



if (! isset($res['email'])) {
    $requete = $bdd->prepare("INSERT INTO users (nom, prenom, metier, email, mdp, avatar) VALUES (:nom, :prenom, :metier, :email, :mdp, :avatar)");
    $requete->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'metier' => $metier,
        'email' => $email,
        'mdp' => $mdp,
        'avatar' => $avatar
    ]);
    echo "Inscription réussie !";
} else {
    echo "Cet email est déjà utilisé.";
}

?>