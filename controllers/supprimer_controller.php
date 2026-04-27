<?php

session_start();

$id = $_SESSION['id'];

$bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');

$requete = "DELETE FROM `users` WHERE id = $id;";
$bdd->query($requete);

session_destroy();
header('Location: ../views/inscription.php?succes=1');

?>