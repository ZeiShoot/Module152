<?php

require 'constantes.inc.php';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}



//Fonction ajout dans la bdd
function AddImage($type, $nom)
{
  static $ps = null;
  $sql = "INSERT INTO `M152`.`Media` (`typeMedia`, `nomMedia`) ";
  $sql .= "VALUES (:type, :nom)";
  if ($ps == null) {
    $ps = pokedexDB()->prepare($sql);
  }
  $answer = false;
  try {
    $ps->bindParam(':type', $type, PDO::PARAM_STR);
    $ps->bindParam(':nom', $nom, PDO::PARAM_STR);

    $answer = $ps->execute();
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  return $answer;
}
