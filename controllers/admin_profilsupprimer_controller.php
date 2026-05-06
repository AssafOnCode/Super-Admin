<?php

$id = $_GET['id'];

$bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');
$requete = $bdd->prepare("DELETE FROM users WHERE id = :id");
$requete->execute(['id' => $id]);
$res = $requete->fetch();

header('Location: ./../views/admin_list_users.php');

?>