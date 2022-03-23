<?php
require 'controleurs/constantes.inc.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/facebook.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">
                <!-- main right col -->
                <div class="column col-sm-10 col-xs-11" id="main">

                    <!-- top nav -->
                    <div class="navbar navbar-blue navbar-static-top">
                        <div class="navbar-header">
                            <a href="index.php" class="navbar-brand logo">F</a>
                        </div>
                        <nav class="collapse navbar-collapse" role="navigation">
                            <!--insérer la barre de recherche ici-->
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
                                </li>
                                <li>
                                    <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                                </li>
                                <li>
                                    <a href="#"><span class="badge">badge</span></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Compte</a></li>
                                        <li><a href="">Paramètre</a></li>
                                        <li><a href="">Archives</a></li>
                                        <li><a href="">Déconnexion</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /top nav -->
                    <div class="padding">
                        <div class="full col-sm-9">
                            <!-- content -->
                            <div class="row">
                                <!-- main col left -->
                                <div class="col-sm-5">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail"><img src="assets/img/r6.jpg" class="img-responsive"></div>
                                        <div class="panel-body">
                                            <p class="lead">ZeiShoot Shoting</p>
                                            <p>727 Followers, 10 Posts</p>
                                            <p>
                                                <img src="assets/img/Logo.jpg" height="40px" width="40px">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- main col right -->
                                <div class="col-sm-7">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><a href="https://www.instagram.com/zeishoot" class="pull-right">Voir Plus</a>
                                            <h4>Blog de ZeiShoot</h4>
                                        </div>
                                        <div class="panel-body">
                                            <p><img src="assets/img/Ico_BlackZ.ico" class="img-circle pull-right"> <a href="#">Les posts sont affichés de façon chronologique.</a></p>
                                            <div class="clearfix"></div>
                                            <hr> Design, build, test, and prototype using Bootstrap in real-time from your Web browser. Bootply combines the power of hand-coded HTML, CSS and JavaScript with the benefits of responsive design using Bootstrap.
                                            Find and showcase Bootstrap-ready snippets in the 100% free Bootply.com code repository.
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="https://twitter.com/EliasZaiem3">Twitter</a> <small class="text-muted">|</small> <a href="https://www.facebook.com/elias.zaiem.7/">Facebook</a>
                                    <small class="text-muted">|</small> <a href="https://www.instagram.com/zeishoot">Instagram</a>
                                </div>
                            </div>
                            <div class="row" id="footer">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">
                                    <p>
                                        <a href="#" class="pull-right">© Elias Zaiem 2022</a>
                                    </p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!-- /col-9 -->
                    </div>
                    <!-- /padding -->
                </div>
                <!-- /main -->
            </div>
        </div>
    </div>
    <!--post modal-->
    <div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button> Faire un nouveau Post
                </div>
                <!--	Formulaire d'envoi de fichier	-->
                <form class="form center-block" method="POST" action="upload.php" enctype="multipart/form-data">
                    <div class="modal-body">
                        <textarea class="form-control input-lg" name="commentaire" autofocus="" placeholder="Que voulez-vous partager ?"></textarea>
                        <input type="file" name="fileToUpload" multiple accept="image/png, image/gif, image/jpeg, image/jpg" />
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle=offcanvas]').click(function() {
                $(this).toggleClass('visible-xs text-center');
                $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
                $('.row-offcanvas').toggleClass('active');
                $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
                $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
                $('#btnShow').toggle();
            });
        });
    </script>
</body>

</html>