<?php
require_once "assets/lib/scssphp/scss.inc.php";
use Leafo\ScssPhp\Compiler;

$md5_scss = md5_file("assets/sass/main.scss");
$md5_data = file_get_contents("assets/data/main_md5", FILE_USE_INCLUDE_PATH);

if ($md5_scss != $md5_data) {
	$scss = new Compiler();
	$scss->setImportPaths('assets/sass/');
	$css = $scss->compile('@import "main.scss";');

	$file_css = fopen("assets/css/main.css", "w");
	$file_data = fopen("assets/data/main_md5", "w");
	fwrite($file_css, $css);
    fwrite($file_data, $md5_scss);
    //echo 'Compile ok';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!--<link rel="stylesheet" href="assets/css/jquery-ui.min.css">-->
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <title>ALLEZCINE!</title>
</head>

<body>
    <!-- Boite de dialog majeur -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Etes vous majeur ?</h5>
                </div>
                <div class="modal-body">
                    <p>Vous devez avoir au moins 18 ans pour consulté ce site</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-age-cancel">Je n'ai pas 18 ans</button>
                    <button type="button" class="btn btn-primary btn-age-ok" data-dismiss="modal">J'ai 18 ans</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin boite de dialog majeur -->
    <header>
        <!-- Début NavBar -->
        <nav class="navbar fixed-top navbar-dark bg-dark navbar-expand-xl" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand font-weight-bold" href="#"><span class="text-red">ALLEZ</span><span class="text-white">CINE!</span></a>
            <button type="button" class="navbar-toggler collapsed custom-toggler" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav mx-auto">
                    <li class="active nav-item nav-home"><a href="#" class="nav-link font-weight-bold text-red" onClick="ancreAuto('home')">HOME</a></li>
                    <li class="dropdown nav-item"> <a href="#" class="dropdown-toggle nav-link font-weight-bold" data-toggle="dropdown">FILMS & SERIES</a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-item">
                                <div class="dropdown-header">Films</div>
                            </li>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('fAll')">All</a>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('fAction')">Action</a>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('fPolicier')">Policer</a>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('fComedie')">Comedie</a>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('fHorreur')">Horreur</a>
                            <li class="dropdown-item">
                                <div class="dropdown-header">Séries</div>
                            </li>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('sAll')">All</a>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('sAction')">Action</a>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('sPoclicier')">Policer</a>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('sComedie')">Comedie</a>
                            <a href="#" class="dropdown-item text-white" onClick="ancreAuto('sHorreur')">Science-fiction</a>
                        </ul>
                    </li>
                    <li class="active nav-item nav-home"><a href="#" class="nav-link font-weight-bold text-red" onClick="ancreAuto('shop')">SHOP</a></li>
                    <li class="active nav-item nav-home"><a href="#" class="nav-link font-weight-bold text-red" onClick="ancreAuto('footer')">FOOTER</a></li>
                    <li class="active nav-item nav-home"><a href="#" class="nav-link text-white font-weight-bold" onClick="ancreAuto('contact')">CONTACT</a></li>
                </ul>
                <form class="form-inline my-2 my-lg-0" role="search">
                    <div id="custom-search-input">
                        <div class="input-group"><form id="searchForm" action="search" method="post">
                            <input type="text" class="search-query form-control" placeholder="Recherche" />
                            <span class="input-group-btn">
                                <button type="button" disabled class="">
                                    <span class="fa fa-search fa-white"></span>
                                </button>
                            </span></form>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
        </nav>
        <!-- Fin NavBar -->
        <!-- Début jumbotron -->
        <div class="jumbotron">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/header1.jpg" alt="Los Angeles" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/header2.jpg" alt="Chicago" width="1100" height="500">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev"></a>
                <a class="carousel-control-next" href="#demo" data-slide="next"></a>
                <div class="main-text hidden-xs">
                    <div class="col-md-12 text-center text-content">
                        <h1><span class="font-weight-bold">LATEST <span class="text-red">ON</span>LINE <span class="text-red">MO</span>VIES</span></h1>
                        <p class="carousel-content-h3">IN SPACE NO ONE CAN HEAR SCREAM.</p>
                        <div class="">
                            <button type="button" class="btn btn-dark bt-watch-trailer bg-red btn-noradius" href="">WATCH TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin jumbotron -->
        <div class="text-white nav-login">
            <div class="row bg-red">
                <div class="nav-tel">
                    <i class="fa fa-phone"></i>&nbsp;(+000) 009 455 4088
                </div>
                <div class="btn-log">
                    <button type="button" class="btn btn-dark btn-login btn-noradius">LOGIN</button> <button type="button" class="btn btn-dark btn-register btn-noradius">REGISTER</button>
                </div>
            </div>
        </div>
    </header>
    <!-- Début Dialog Search -->
    <div class="modal fade" id="searchModalCenter" tabindex="-1" role="dialog" aria-labelledby="searchModalCenter"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalTitle"></h5>
                </div>
                <div class="modal-body">
                    <div class="open_modal_search" id="searchDivContent"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-age-ok" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="searchModalView" tabindex="-1" role="dialog" aria-labelledby="showModalViewTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-body-show modal-800" role="document">
            <div class="modal-content" style="width:1250px;">
                <div class="modal-header">
                    <h5 class="modal-view-title" id="showModalViewTitle"></h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center modal-view-img-c">
                                <img class="modal-view-img img-fluid" src="" alt="" />
                            </div>
                            <div class="col-6">
                                <p class="modal-view-syno"></p>
                                <p class="modal-view-date"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-age-ok" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Dialog Search -->
    <!-- Début Dialog Login -->
    <div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">Login avec
                            <div class="social-buttons text-center">
                                <a href="#" class="btn btn-fb-dial"><i class="fa fa-facebook"></i> Facebook</a>
                                <a href="#" class="btn btn-tw-dial"><i class="fa fa-twitter"></i> Twitter</a>
                            </div>Ou
                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="inputPassword2">Mot de passe</label>
                                    <input type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe" required>
                                    <div class="form-text text-right"><a href="">Mot de passe perdu ?</a></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block bg-red">Connection</button>
                                    <div class="form-check">
                                        <label><input type="checkbox">&nbsp;laisse moi connecté</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-secondary btn-block btn-register " data-dismiss="modal">Créer un compte</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Dialog Login -->
    <!-- Début Dialog Enregistrement -->
    <div class="modal fade" id="registerModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Entregistrement</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">Entregistrement avec
                            <div class="social-buttons text-center">
                                <a href="#" class="btn btn-fb-dial"><i class="fa fa-facebook"></i> Facebook</a>
                                <a href="#" class="btn btn-tw-dial"><i class="fa fa-twitter"></i> Twitter</a>
                            </div>Ou
                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="register-nav">
                                <div class="form-group">
                                    <label class="sr-only" for="registerInputName">Nom</label>
                                    <input type="input" class="form-control" id="registerInputName" placeholder="Nom" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="registerInputEmail">E-Mail</label>
                                    <input type="input" class="form-control" id="registerInputEmail" placeholder="E-Mail" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="registerInputPassword">Mot de passe</label>
                                    <input type="password" class="form-control" id="registerInputPassword" placeholder="Mot de passe" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="registerInputPassword2">Confirmer le mot de passe</label>
                                    <input type="password" class="form-control" id="registerInputPassword2" placeholder="Mot de passe" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block bg-red" data-dismiss="modal">Enregistrement</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block btn-login" data-dismiss="modal">Login</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Dialog Enregistrement -->
    <!-- Social link -->
    <div class="content social-link-content">
        <div class="row">
            <ul class="social-btns">
                <li><button class="btn btn-twitter btn-round font-weight-bold">Twitter<span class="pull-right fa-round"><i class="fa fa-twitter fa-black pull-right twitter-left" aria-hidden="true"></span></i></button></li>
                <li><button class="btn btn-facebook btn-round font-weight-bold">Facebook<span class="pull-right fa-round"><i class="fa fa-facebook fa-black pull-right facebook-left" aria-hidden="true"></span></i></button></li>
                <li><button class="btn btn-google btn-round font-weight-bold">Dribbble<span class="pull-right fa-round"><i class="fab fa-dribbble fa-black pull-right drebbble-left" aria-hidden="true"></span></i></button></li>
                <li><button class="btn btn-google btn-round font-weight-bold">Google<span class="pull-right fa-round"><i class="fa fa-google-plus fa-black pull-right google-left" aria-hidden="true"></span></i></button></li>
            </ul>
        </div>
    </div>
    <!-- Fin Social Link -->
    <!-- Début Top films -->
    <div class="container">
        <div class="featured_global featured_global_top d-flex justify-content-center align-self-center row">
            <div class="top-film-view open_modal_infos" id="topFilmView"></div>
        </div>
    </div>
    <!-- Fin Top Film -->
    <!-- Début Features Films -->
    <div id="featuredMovie"></div>
    <div class="container d-flex justify-content-center">
        <div class="featured_global featured_global_movie container row">
            <p class="titre-section" id="featuredMovie">FEATURED MOVIES</p>
            <ul class="nav nav-pills mb-3 nav-features" id="pills-tab" role="tablist">
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red active" id="all film" data-toggle="pill" href="#pills-all-movie" role="tab" aria-controls="pills-all-movie" aria-selected="true">All</a>
                </li>
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red" id="action film" data-toggle="pill" href="#pills-action-movie" role="tab" aria-controls="pills-action-movie" aria-selected="false">Action</a>
                </li>
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red" id="policier film" data-toggle="pill" href="#pills-policier-movie" role="tab" aria-controls="pills-policier-movie" aria-selected="false">Policier</a>
                </li>
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red" id="comedie film" data-toggle="pill" href="#pills-comedie-movie" role="tab" aria-controls="pills-comedie-movie" aria-selected="false">Comédie</a>
                </li>
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red" id="horreur film" data-toggle="pill" href="#pills-horreur-movie" role="tab" aria-controls="pills-horreur-movie" aria-selected="false">Horreur</a>
                </li>
            </ul>

            <div class="open_modal_infos" id="feturedFilmView"></div>
            <div class="text-center">
                <button type="button" id="less-movie" class="btn btn-link bg-red fa-white font-weight-bold btn-noradius">MOINS DE FILMS</button>
                <button type="button" id="more-movie" class="btn btn-link bg-red fa-white font-weight-bold btn-noradius">PLUS DE FILMS</button>
            </div>
        </div>
    </div>
    <!-- Fin Features Films -->
    <!-- Début Features Séries -->
    <div class="container d-flex justify-content-center">
        <div class="featured_global featured_global_serie container row">
            <p class="titre-section pull-left" id="featuredSerie">FEATURES SERIES TV</p>
            <ul class="nav nav-pills mb-3 nav-features" id="pills-tab" role="tablist">
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red active" id="all serie" data-toggle="pill" href="#pills-all-serie" role="tab" aria-controls="pills-all-serie" aria-selected="true">All</a>
                </li>
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red" id="action serie" data-toggle="pill" href="#pills-action-serie" role="tab" aria-controls="pills-action-serie" aria-selected="false">Action</a>
                </li>
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red" id="policier serie" data-toggle="pill" href="#pills-policier-serie" role="tab" aria-controls="pills-policier-serie" aria-selected="false">Policier</a>
                </li>
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red" id="comedie serie" data-toggle="pill" href="#pills-comedie-serie" role="tab" aria-controls="pills-comedie-serie" aria-selected="false">Comédie</a>
                </li>
                <li class="nav-item text-center nav-fix-size">
                    <a class="nav-link nav-feature-color text-red" id="horreur serie" data-toggle="pill" href="#pills-horreur-serie" role="tab" aria-controls="pills-horreur-serie" aria-selected="false">Comédie</a>
                </li>
            </ul>

            <div class="open_modal_infos" id="feturedSerieView"></div>
            <div class="text-center">
                <button type="button" id="less-serie" class="btn btn-link bg-red fa-white font-weight-bold btn-noradius">MOINS DE FILMS</button>
                <button type="button" id="more-serie" class="btn btn-link bg-red fa-white font-weight-bold btn-noradius">PLUS DE SERIES</button>
            </div>
        </div>
    </div>
    <!-- Fin Features Séries -->
    <!-- Debut Modal Film/Série -->
    <div class="modal fade" id="showModalView" tabindex="-1" role="dialog" aria-labelledby="showModalViewTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-body-show modal-800" role="document">
            <div class="modal-content" style="width:1250px;">
                <div class="modal-header">
                    <h5 class="modal-view-title" id="showModalViewTitle"></h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center modal-view-img-c">
                                <iframe class="modal-view-img" src="" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <!-- <img class="modal-view-img img-fluid" src="" alt=""/> -->
                            </div>
                            <div class="col-6">
                                <p class="modal-view-syno"></p>
                                <p class="modal-view-date"></p>
                                <p class="modal-view-genre"></p>
                                <p class="modal-view-real"></p>
                                <p class="modal-view-actor"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-age-ok" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal Film/Série -->
    <!-- Début Shop Movie -->
    <div class="container container-shop">
        <p class="titre-section-shop" id="shopMovies">SHOP MOVIES</p><br>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    <button class="btn-shop" id="btnLeft" type="button" name="l"> &lt; </button>
                    <button class="btn-shop" id="btnRight" type="button" name="r"> &gt; </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div id="shopFilmView"></div>
            </div>
            <div class="col-6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center no-padding">
                            <iframe class="shop-trailer" src="" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row shop-info-bottom">
                        <div class="col-12 no-padding">
                            <h2 class="text-red shop-title p-2"></h2>
                        </div>
                        <div class="col-3 d-flex align-items-center no-padding">
                            <p class="text-red d-flex p-2">Story line</p>
                        </div>
                        <div class="col-1 d-flex align-items-center no-padding">
                            <p class="text-red">:</p>
                        </div>
                        <div class="col-8 d-flex no-padding">
                            <p class="d-flex shop-syno fa-white"></p>
                        </div>
                        <div class="col-3 d-flex align-items-center no-padding">
                            <p class="text-red d-flex p-2">Released On</p>
                        </div>
                        <div class="col-1 d-flex align-items-center no-padding">
                            <p class="text-red">:</p>
                        </div>
                        <div class="col-8 d-flex align-items-center fa-white no-padding">
                            <p class="shop-date"></p>
                        </div>
                        <div class="col-3 d-flex align-items-center no-padding">
                            <p class="text-red d-flex p-2">Genres</p>
                        </div>
                        <div class="col-1 d-flex align-items-center no-padding">
                            <p class="text-red">:</p>
                        </div>
                        <div class="col-8 d-flex align-items-center fa-white no-padding">
                            <p class="shop-genre"></p>
                        </div>
                        <div class="col-3 no-padding">
                            <p class="text-red p-2">Price</p>
                        </div>
                        <div class="col-1 d-flex align-items-center no-padding">
                            <p class="text-red">:</p>
                        </div>
                        <div class="col-8 d-flex align-items-center fa-white no-padding">
                            <p class="shop-price"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Shop Movie-->
    <!-- Début Contact -->

    <div class="container">
        <div class="titreFeature">
            <h1 class="feature contactus" id="contactUs"> CONTACT US</h1>
        </div>
        <form onsubmit="return myclick()" method="get">
            <div class="row">
                <div class="col p-3">
                    <input type="text" class="form-control" id="firstname" placeholder="FIRST NAME">
                </div>

                <div class="col p-3">
                    <input type="text" class="form-control" id="lastname" placeholder="LAST NAME">
                </div>

            </div>
            <div class="row">
                <div class="col p-3">
                    <input type="email" class="form-control" id="email" placeholder="EMAIL" name="e-mail">
                </div>
                <div class="col p-3">
                    <input type="text" class="form-control" id="subject" placeholder="SUBJECT" name="subject">
                </div>
            </div>
            <textarea class="form-control" rows="5" id="message" placeholder="YOUR MESSAGE" name="your message"></textarea>
            <button type="submit" id='btnform' class="redBox">SEND MESSAGE</button>
        </form>
    </div>
    <br>
        <div class="container d-flex justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1271.4409211867062!2d4.441198994342527!3d50.40603961099474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c22675015d209b%3A0x3fafc34a3b45d344!2sQuai10!5e0!3m2!1sfr!2sbe!4v1542107272228" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- Fin Contact -->
    <!-- Début Footer -->
    <footer class="footer" id="footerNav">
        <section id="footer">
            <div class="search-text">
                <div>
                    <div class="d-flex justify-content-center align-self-center">
                        <h5><span class="font-weight-bold text-red">SUBSCRIBE TO US</span></h5>
                    </div>
                    <div class="d-flex justify-content-center align-self-center">
                        <div class="form">
                            <form id="search-form" class="form-search form-horizontal" action="http://thedoudou.myds.me/be_code/allezcine/newsletter.html">
                                <input type="text" class="input-search" placeholder="Enter your email">
                                <button type="submit" class="btn-search bg-red fa-white font-weight-bold">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>         
             </div>  
        </div>
        <div class="vSPace"></div><div class="vSPace"></div><div class="vSPace"></div>
        <div class="container-fluid d-flex justify-content-center">
            <div class="col 12 row text-center text-xs-center text-sm-center text-md-center">
                <div class="col-md-2 offset-md-1">
                    <h5>REALEASE</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>2016</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>2015</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>2014</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>2013</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>2012</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>2011</a></li>
                    </ul>
                </div>
                <div class=" col-md-2">
                    <h5>MOVIES</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();" onClick="ancreAuto('fAll')"><i class="fa fa-angle-double-right"></i>ALL</a></li>
                        <li><a href="javascript:void();" onClick="ancreAuto('fAction')"><i class="fa fa-angle-double-right"></i>ACTION</a></li>
                        <li><a href="javascript:void();" onClick="ancreAuto('fPolicier')"><i class="fa fa-angle-double-right"></i>POLICIER</a></li>
                        <li><a href="javascript:void();" onClick="ancreAuto('fComedie')"><i class="fa fa-angle-double-right"></i>COMEDIE</a></li>
                        <li><a href="javascript:void();" onClick="ancreAuto('fHorreur')"><i class="fa fa-angle-double-right"></i>HORREUR</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5 class="title">REVIEW MOVIES</h5>
                    <div class="category">
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fComedie')">Comedy</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fHorreur')">Horror</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fPolicier')">Policier</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fAll')">Romantic</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fAll')">Love</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fAction')">Action</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fAll')">Reviews</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fHorreur')">Horror</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fComedie')">Historical</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fAll')">Romantic</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fAll')">Love</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fComedie')">Comedy</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fHorreur')">Horror</a>
                        <a class="btn-noradius" href="#" onClick="ancreAuto('fAll')">Historical</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5>LATEST MOVIES</h5>
                    <div class="footer_part">
                        <div class="footer_blog_area">
                            <div class="footer_thumb">
                                <img class="img-fluid  " src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                            </div>
                            <a href="#">shape of water</a>
                            <p class="footer_latest_movies">13 Sept 2013</p>
                        </div>
                        <div class="footer_blog_area">
                            <div class="footer_thumb">
                                <img class="img-fluid " src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                            </div>
                            <a href="#">Quai 10 son histoire</a>
                            <p class="footer_latest_movies">7 Mar 1994</p>
                        </div>
                        <div class="footer_blog_area">
                            <div class="footer_thumb">
                                <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                            </div>
                            <a href="#">Un nouveau souffle</a>
                            <p class="footer_latest_movies">13 Fev 2011</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5><span class="text-red">ALLEZ</span><span class="text-white">CINE!</span></h5>


                    <div class="row d-flex justify-content-start">
                        <a class="col-lg-4" href="#"><img class="imagefooter" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt=""></a>
                        <a class="col-lg-4" href="#"><img class="imagefooter" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt=""></a>
                        <a class="col-lg-4" href="#"><img class="imagefooter" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt=""></a>

                        <a class="col-lg-4" href="#"><img class="imagefooter" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt=""></a>
                        <a class="col-lg-4" href="#"><img class="imagefooter" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt=""></a>
                        <a class="col-lg-4" href="#"><img class="imagefooter" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt=""></a>
                    </div>

                </div>
            </div>
        </div>

        <div id="scrollUp" class="row">
            <a href="#top"><img class="scrollUp-img" src="assets\img\arrow-up.png" /></a>
        </div>
        <hr>
        <div class="vSPace"></div>
        <div class="vSPace"></div>
        <div class="vSPace"></div>
        <div class="vSPace"></div>
        <div class="vSPace"></div>
        <hr>
        <div class="d-flex justify-content-center align-self-center">
            <h5><span class="font-weight-bold">CONNECT US</span></h5>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    </section>
    </footer>
    <script src="assets/js/themonviedb.js" type="text/javascript"></script>
    <script src="assets/js/popper-1.14.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--<script src="assets/js/jquery-ui.min.js"></script>-->
    <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>