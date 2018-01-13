<?php
include ('crudreclamationidee.php');

 if(empty($_SESSION['usersession']))
 {
     header("location:login.php");
 }
//var_dump($_SESSION['usersession']);
 //var_dump($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.mylamarena.com/vermun/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 22:12:16 GMT -->
<head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
    Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Virtual BAB</title>
    <meta name="description" content="">
    <meta name="author" content="Laze">

    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="http://www.mylamarena.com/favicon.ico">
    <link rel="apple-touch-icon" href="../apple-touch-icon.html">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
    <link rel="stylesheet" href="css/style_hero.css">
    <link rel='stylesheet' href='style.css'>
    <meta charset="utf-8">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Resource style -->
    <script src="js/modernizr.html"></script>
    <!-- Modernizr -->
    <!-- Font awsome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Add fancyBox -->
    <link rel="stylesheet" type="text/css" href="fancyapps-fancyBox/source/jquery.fancybox.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <!-- Owl carousel-->
    <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.theme.default.min.css">
    <!-- Animate style -->
    <link rel="stylesheet"  type="text/css" href="css/animate.css">
    <!-- Hover effects style -->
    <link rel="stylesheet" type="text/css" href="css/effects.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Main style -->

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive%20.css">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" type="text/css" href="includes/video_gallery_ie.css" />
    <![endif]-->

</head>

<body>

<div class="top-line">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="info">
                        <li>
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>Phone +216 21 31 77 82
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>Virtual.BAB@esprit.com
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>Esprit El Ghazala Tunisia
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li>
                            <a href="#" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<nav id="main-navigation-wrapper" class="navbar navbar-default finance-navbar">
    <div class="container">
        <div class="logo pull-left">
            <a href="index.php" class="logo-desktop"><img src="img/logo.jpg" alt="Awesome Image"></a> <a href="index.php" class="logo-mobile"><img src="img/logo.jpg" alt="Awesome Image"></a>
        </div>
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div id="main-navigation" class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown">
                    <a href="index.php">Home</a>
                </li>

                <li class="dropdown">
                    <a href="Profile.php">Profile</a>
                    <ul class="dropdown-submenu">
                        <li>
                            <a href="AssurancesUser.php">Mes Assurances</a>
                        </li>
                        <li>
                            <a href="BoursesUser.php">Mes Bourses</a>
                        </li>
                        <li>
                            <a href="IdeesUser.php">Mes Idées</a>
                        </li>
                        <li>
                            <a href="ReclamationsAssurancesUser.php">Mes reclamations Assurances</a>
                        </li>
                        <li>
                            <a href="ReclamationsBoursesUser.php">Mes reclamations Bourses</a>
                        </li>
                        <li>
                            <a href="ReclamationsIdeesUser.php">Mes reclamations Idées</a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="Assurances.php">Assurances</a>
                    <ul class="dropdown-submenu">
                        <li>
                            <a href="AssurancesVie.php">Assurance Vie</a>
                        </li>
                        <li>
                            <a href="AssurancesImmobilier.php">Assurance Immobilier</a>
                        </li>
                        <li>
                            <a href="AssurancesVoiture.php">Assurance Voiture</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="Bourses.php">Bourses</a>

                </li>
                <li class="dropdown">
                    <a href="Idees.php">Idées</a>

                </li>

                <li class="dropdown">
                    <a href="#">about us</a>
                    <ul class="dropdown-submenu">
                        <li>
                            <a href="about_us.php">About Our Company</a>
                        </li>
                        <li>
                            <a href="meet_the_team.php">Meet Our Team</a>
                        </li>
                        <li>
                            <a href="Faq.php">FAQ</a>
                        </li>
                        <li>
                            <a href="Testimonials.php">Testimonials</a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="contactus.php">contact us</a>
                </li>
                <li class="dropdown">
                    <a href="logout.php">Se déconnecter </a>
                </li>
                <li class="dropdown">
                    <button id="searchDropdown" class="search dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <form class="dropdown-menu">
                        <input class="form-control" placeholder="Searcs..." type="text" />

                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Header slider -->


<section class="contact_header top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Mes reclamations</h2>
            </div>
        </div>
    </div>
</section>
<section class="news-section">
    <?php

    $crudreclamationidee = new crudreclamationidee();
    $result = $crudreclamationidee->showuserreclamationsidees($crudreclamationidee->conn);
    foreach($result as $r){
    ?>
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-6 col-xs-12">

                <div class="news_one">
                    <div class="row clearfix">
                        <div class="col-md-5 col-sm-6 col-xs-12 image">
                            <div class="row clearfix">

                                <Img src="images/billet-reclamoscope1-iloveimg-resized-iloveimg-resized.png">
                                <div class="overlay">
                                    <div class="text"><a href="#" ><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                    <div class="text2"><a class="fancybox-effects-d" href="img/blog2.jpg" ><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xs-12 text-box">
                            <h3> Reclamation : <a class="title2" href="#">	<?php  echo $r['i1'] ?> </a></h3>

                            <ul class="post-meta">
                                <li><a href="#" ><i class="fa fa-calendar" aria-hidden="true"></i> <?php  echo $r['r2'] ?></a></li>

                            </ul>
                            <b> <h2><a class="title2" href="#">	<?php  echo $r['r5'] ?> </a></h2></b>
                            <div class="text">
                                <p>
                                    <?php echo $r['r3']?>
                                </p>
                            </div>
                            <div class="text">

                                <?php
                                if($r['r1']==NULL){
                                   ?> <p> Chers Client votre réclamation est encour de traitement </p> <?php
                                }
                                else
                                {
                                    echo $r['r1'] ;
                                }?>

                            </div>
                            <div class="author">
                                <figure>
                                    <img src="img/author1.jpg">
                                </figure>
                                <div class="author-text">
                                    <h4><?php echo $r['u2']; echo $r['u1'] ;?></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php } ?>

        </div>

    </div>


</section>
<!-- last section -->
<section class="get-quote">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h3>We Always Try to make a Difference</h3>
                <p> Nunc ac sapien lobortis, eleifend orci eu, vulputate mauris.  Quisque sed pharetra justo, a dictum eros.</p>
            </div>
            <div class="col-lg-3">
                <a class="btn btn-default hvr-bounce-to-right-reverse" href="#" data-text="read-more">GET A QUOTE</a>
            </div>
        </div>
    </div>

</section>
<?php
include 'footer.php';

?>
