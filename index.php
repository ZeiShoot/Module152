<?php
//Démarrage de la session
session_start();

//Include des fichiers nécéssaires
include 'traitement/monPdo.php';
include 'traitement/Post.php';
include 'traitement/Media.php';

if (!isset($_SESSION['message'])) {
    $_SESSION['message'] = [
        'type' => null,
        'content' => null
    ];
    $_SESSION['idEditPost'] = null;
}
ini_set('display_errors', 1);
$uc = filter_input(INPUT_GET, 'uc') == null ? "home" : filter_input(INPUT_GET, 'uc'); //Page d'accueil par défaut


//Visuel du header
if($uc != "getAllPosts"){
include 'visuel/header.php';
}

// Gestion des affichages
switch ($uc) {
        // Affichage de la page d'accueil
    case 'home':
        $posts = Post::getAllPosts();
        include "visuel/home.php"; //Visuel de la page d'acceuil
        break;
    case 'post':
        include 'traitement/post_controller.php';
        break;

        case 'getAllPosts':
            echo Post::CountAllPosts();
            break;
}

//Visuel du footer
if($uc != "getAllPosts"){
include 'visuel/footer.php';
} 
error_reporting(E_ALL);
