<?php
$hote = 'localhost';
$port = "3306";
$nom_bdd = 'M152';
$utilisateur = 'eliaszm';
$mot_de_passe ='2404';

try {
	//On test la connexion à la base de donnée
    $pdo = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bdd, $utilisateur, $mot_de_passe);
    echo 'Connexion PDO réussie !';

} catch(Exception $e) {
	//Si la connexion n'est pas établie, on stop le chargement de la page.
	echo 'Echec de la connexion à la base de données';
    exit();

}