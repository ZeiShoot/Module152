<?php
session_start();
if (!isset($_SESSION['message'])) {
    $_SESSION['message'] = [
        'type' => null,
        'content' => null
    ];
    $_SESSION['idEditPost'] = null;
}
ini_set('display_errors', 1);
$uc = filter_input(INPUT_GET, 'uc') == null ? "home" : filter_input(INPUT_GET, 'uc'); // affiche la page accueil par défaut

include 'traitement/monPdo.php';
include 'traitement/Post.php';
include 'traitement/Media.php';

// afichage du header
if($uc != "getAllPosts"){
include 'visuel/header.php';
}

// Gestion des affichages
switch ($uc) {
        // Affichage de la page d'accueil
    case 'home':
        $posts = Post::getAllPosts();
        include "visuel/home.php"; // affiche la vue d'accueil
        break;
        // redirection sur le controller post
    case 'post':
        include 'controllers/post_controller.php';
        break;

        case 'getAllPosts':
            echo Post::CountAllPosts();
            break;

    default:
        include 'visuel/erreur404.php'; // affiche la page d'erreur 404 si le lien n'est pas valide
        break;
}

// Affichage du footer
if($uc != "getAllPosts"){
include 'visuel/footer.php';
} 
error_reporting(E_ALL);
