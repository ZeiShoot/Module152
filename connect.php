<?php
require 'constantes.inc.php';

function dbconnect()
{
  static $dbc = null;

  // Première visite de la fonction
  if ($dbc == null) {
    // Essaie le code ci-dessous
    try {
      $dbc = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, DBUSER, DBPWD, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_PERSISTENT => true
      ));
    }
    // Si une exception est arrivée
    catch (Exception $e) {
      echo 'Erreur : ' . $e->getMessage() . '<br />';
      echo 'N° : ' . $e->getCode();
      // Quitte le script et meurt
      die('Could not connect to MySQL');
    }
  }
  // Pas d'erreur, retourne un connecteur
  return $dbc;
}

function insertImage($type, $nom)
{
  static $ps = null;
  $sql = "INSERT INTO `M152`.`Media` (`typeMedia`, `nomMedia`) ";
  $sql .= "VALUES (:TYPE, :NOM)";
  if ($ps == null) {
    $ps = dbconnect()->prepare($sql);
  }
  $answer = false;
  try {
    $ps->bindParam(':TYPE', $type, PDO::PARAM_STR);
    $ps->bindParam(':NOM', $nom, PDO::PARAM_STR);

    $answer = $ps->execute();
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  return $answer;
}