<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="utf-8">
  <title>ZeiShoot Blog</title>
  <!--Link des css-->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/facebook.css" rel="stylesheet">
  <link href="./assets/css/custom.css" rel="stylesheet">
</head>

<body>

  <div class="wrapper">
    <div class="box">
      <div class="row row-offcanvas row-offcanvas-left">
        <!-- main right col -->
        <div class="column col-sm-12 col-xs-12" id="main">
          <!-- top nav -->
          <div class="navbar navbar-blue navbar-static-top">
            <div class="navbar-header">
              <a href="index.php" class="navbar-brand logo">F</a>
            </div>
            <nav class="collapse navbar-collapse" role="navigation">
              <form class="navbar-form navbar-left">
                <div class="input-group input-group-sm" style="max-width:360px;">
                  <input class="form-control" placeholder="Rechercher" name="srch-term" id="srch-term" type="text">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
              </form>
              <ul class="nav navbar-nav">
                <li>
                  <a href="index.php"><i class="glyphicon glyphicon-home"></i> Accueil</a>
                </li>
                <li>
                  <a href="index.php?uc=post&action=show"><i class="glyphicon glyphicon-plus"></i> Poster</a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                  <!-- Lors du clique sur l'icone en haut ?? droite-->
                  <ul class="dropdown-menu">
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Compte</a></li>
                    <li><a href="">Param??tre</a></li>
                    <li><a href="">D??connexion</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <!-- /top nav -->