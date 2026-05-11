<?php

session_start();
//Admin
$id_admin = $_SESSION['id'];
//projetcts
$nom = $_POST['nom'];
$temps = $_POST['temps'];
$descriptions = $_POST['descriptions'];
//projects_users
$developpeurs = $_POST['developpeur'];
$marketeur = $_POST['marketeur'];
$designer = $_POST['designer'];


//insert du projet
$bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');
$requete = $bdd->prepare('INSERT INTO project(nom, temps, descriptions,leader) VALUES(:nom, :temps, :descriptions, :leader)');
$requete->execute(['nom' => $nom, 'temps' => $temps, 'descriptions' => $descriptions, 'leader' => $id_admin]);

//recuperation de l'id du projet 
$requete1 = $bdd->prepare("SELECT id FROM project where nom = :nom AND leader = :id_admin ");
$requete1->execute(['nom' => $nom, 'id_admin' => $id_admin]);
$project = $requete1->fetch();


foreach ($developpeurs as $developpeur)
    {
        // insert des id_users et id_projects avec l'id du projet
        $requete2 = $bdd->prepare('INSERT INTO project_user(id_users, id_projects) VALUES(:id_users, :id_projects)');
        $requete2->execute(['id_users' => $developpeur, 'id_projects' => $project['id']]);
    }

foreach ($marketeur as $marketeur)
    {
        // insert des id_users et id_projects avec l'id du projet
        $requete3 = $bdd->prepare('INSERT INTO project_user(id_users, id_projects) VALUES(:id_users, :id_projects)');
        $requete3->execute(['id_users' => $marketeur, 'id_projects' => $project['id']]);
    }

foreach ($designer as $designer)
    {
        // insert des id_users et id_projects avec l'id du projet
        $requete4 = $bdd->prepare('INSERT INTO project_user(id_users, id_projects) VALUES(:id_users, :id_projects)');
        $requete4->execute(['id_users' => $designer, 'id_projects' => $project['id']]);
    }

header('Location: ./../views/admin_projects.php');


?>
