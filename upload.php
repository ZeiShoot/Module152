<?php

require 'connect.php';
$commentaire = filter_input(INPUT_POST,"commentaire");

$target_dir = "./assets/uploads/";                            //uniqid ici, a la place du name
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    header('Location: index.php');
    AddImage($_FILES["fileToUpload"]["type"], $_FILES["fileToUpload"]["name"]);
    AddPost($commentaire);
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {

      echo 'Files has uploaded';
    };
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

//Fonction du post (texte) dans la base de données et dans la table post*
function AddPost($commentaire)
{
  static $ps = null;
  $sql = "INSERT INTO `M152`.`Post` (`commentaire`) ";
  $sql .= "VALUES (:COMMENTAIRE)";
  if ($ps == null) {
    $ps = dbconnect()->prepare($sql);
  }
  $answer = false;
  try {
    $ps->bindParam(':COMMENTAIRE', $commentaire, PDO::PARAM_STR);

    $answer = $ps->execute();
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  return $answer;
}