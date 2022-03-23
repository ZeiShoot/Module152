<div class="container" style="display: block; margin-top: 3vh;">
<?php
if($_SESSION['message']['type'] != null){ ?>
<div class="alert alert-<?= $_SESSION['message']['type'] ?> alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<?= $_SESSION['message']['content'] ?>
</div>
<?php
  $_SESSION['message'] = [
    'type' => null,
    'content' => null
];
}
?>
    <h1>Créer votre post ici !</h1>

    <!-- Formulaire de création de posts -->
    <form method="POST" action="index.php?uc=post&action=validate" enctype="multipart/form-data">
        <div class="form-group">
            <label for="idDescriptionPost">Insérer une description</label>
            <textarea class="form-control" id="idDescriptionPost" rows="5" name="descriptionPost"></textarea>
        </div>


        <div class="form-group">
            <label for="idFile">Image/Vidéo/Audio</label>
            <input type="file" class="form-control-file" id="idFile" accept="image/*, video/*, audio/*" multiple name="filesPost[]">
        </div>

        <input class="btn btn-success" type="submit" value="Publier">
    </form>
</div>