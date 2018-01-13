<?php
session_start();
if(!empty($_SESSION['usersession']))
{
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.mylamarena.com/vermun/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 22:12:16 GMT -->
<head>
		<meta charset="utf-8">




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
                <div class="navbar-header">
                <ul class="nav navbar-nav pull-right">
                <li class="dropdown">
                    <a href="contactus.php">contact us</a>
                </li>
                </ul>
                </div>
				<div id="main-navigation" class="collapse navbar-collapse">
					<ul class="nav navbar-nav pull-right">

						 	<form id="form1" name="form1" method="post" action="connexion.php">
						 		
						 		<li class="dropdown">
			
<input type="text" id="login" name="login" placeholder=" Login">

</li>
<li class="dropdown">
<input type="password" name="pwd" id="pwd" placeholder=" password" >
</li>
    <li class="dropdown">
    
    <div class="form-grp">
        <button class="btn btn-default hvr-bounce-to-right" type="submit" value="Valider" id="button" name="button"> Login </button>
    </div>
</li>
	</ul>
	</div>
	</form>
</div>
</nav>

		<!-- Header slider -->
<!-- Formulaire d'ajout -->
  
        <section class="contact_us-second">
            <div class="container">
                <div class="row">
                	
                	
                  		<div class="col-md-8 col-sm-12 col-xs-12">
							<header>
								<h2>Virtual BAB</h2>
								<p>
									Inscrivez vous ! Et bénéficiez de plusieurs services chez nous .
								</p>
							</header>
							<form action="addUser.php" method="POST" class="contact-formm">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-grp">
                                        <label>Nom</label>
                                        <input id="nom" type="text" name="nom" placeholder="Ben Foulen">
                                      </div>
                                      <div class="form-grp">
                                        <label>CIN</label>
                                        <input id="cin" type="text" name="cin" placeholder="8888888">
                                      </div>
                                      <div class="form-grp">
                                        <label>Username</label>
                                        <input id="username" type="text" name="username" placeholder="username ">
                                      </div>
                                      <div class="form-grp">
                                        <label>Email</label>
                                        <input id="email" type="email" name="email" placeholder="Foulen.Benfoulen@gmail.com ">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-grp">
                                        <label>Prenom</label>
                                        <input id="prenom" type="text" name="prenom" placeholder="Foulen">
                                      </div>
                                      <div class="form-grp">
                                        <label>Date de naissance</label> <br>
                                        <input id="date" type="date" name="datenaissance" >
                                      </div>
                                      <br>
                                      <div class="form-grp">
                                        <label>Password</label>
                                        
                                        <input id="password" type="text" name="password" placeholder="Password" >
                                      </div>

                                      <div class="form-grp">
                                        <label>Numéro de téléphone</label>
                                        <input id="numtelephone" type="text" name="numtelephone" placeholder="22 22 22 22">
                                      </div>
                                    </div>
                                  
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label>Adresse</label>
                                        <input id="adresse" type="text" name="adresse" placeholder="Numéro-Rue-Ville-Pays">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        
                                        <button class="btn btn-default hvr-bounce-to-right" type="submit">
                                                        S'inscrire
                                                    </button>
                                      </div>
                                      <div id="success"></div>
                                    </div>
                                  </div>
                                </form>
						</div>
                       <div class="col-md-4 col-sm-8 col-xs-12 keep-in"> 
                        	<header>
								<h2>Keep In Touch!</h2>
							</header>                        
						
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
						<div class="contact-box">
							<h3>Locations</h3>
						
						<div class="address-box">
						<div class="icon-box"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
								
						<p class="address-text">For more information contact Rapid Nutrition’s Investor Relations team.</p>
						</div>	
							<div class="address-box">
						<div class="icon-box"><i class="fa fa-phone" aria-hidden="true"></i></div>
								
						<p class="address-text"> 1-888-123-4567 </p>
						</div>	
							<div class="address-box">
						<div class="icon-box"><i class="fa fa-envelope" aria-hidden="true"></i></div>
								
						<p class="address-text"> info@structure.com </p>
						</div>	
							<div class="address-box">
						<div class="icon-box"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
								
						<p class="address-text">Mon - Sat: 09.00am to 18.00pm</p>
						</div>	
						
						</div>
					
                        </div>
                        
                    </div>
                </div>
            
        </section>
<!-- Fin Formulaire d'ajout -->



<section class="cd-hero">
			<ul class="cd-hero-slider autoplay">

				<li class="selected">
					<div class="cd-full-width">
						<div class="container">
							<h2>Good Work
							<br>
							Takes <span class="color-default">Hard Work</span></h2>
							<p>
								Finding your next Financial Advisor is as easy as counting from one to five.
							</p>
							<a href="about-us.html" class="btn bluebtn hvr-bounce-to-right-reverse" data-text="READ MORE">read more</a>
							<a href="contact-us.html" class="btn whitebtn btn-default hvr-bounce-to-right" data-text="Contact Us">Contact Us</a>
						</div>
					</div>
				</li>

				<li>
					<div class="cd-full-width">
						<div class="container text-center">
							<h2>Advice you can
							<br>
							<span class="color-default">Count on</span></h2>
							<p class="color-white">
								Etiam iaculis rhoncus velit, sit amet aliquet sem euismod at
								<br>
								integer consequat velit ac ultrices commodo.
							</p>
							<a href="about-us.html" class="btn bluebtn hvr-bounce-to-right-reverse" data-text="READ MORE">see more</a>
						</div>
					</div>
				</li>

				<li>
					<div class="cd-full-width">
						<div class="container">
							<h2 class="color-white">Become a <span class="color-default">Client</span></h2>
							<p>
								Etiam iaculis rhoncus velit, sit amet aliquet sem euismod at
								<br>
								aliquet sem integer consequat velit ac ultrices commodo.
							</p>
							<a href="about-us.html" class="btn bluebtn hvr-bounce-to-right-reverse" data-text="READ MORE">read more</a>
							<a href="contact-us.html" class="btn whitebtn btn-default hvr-bounce-to-right" data-text="Contact Us">Contact Us</a>
						</div>
					</div>
				</li>

				<li>
					<div class="cd-full-width">
						<div class="container text-right">
							<h2>Testing
							<br>
							<span class="color-default">and Executing</span></h2>
							<p>
								Etiam iaculis rhoncus velit, sit amet aliquet
								<br>
								integer consequat velit ac ultrices commodo.
							</p>
							<a href="about-us.html" class="btn bluebtn hvr-bounce-to-right-reverse" data-text="READ MORE">read more</a>
						</div>
					</div>
				</li>

			</ul>

			<div class="cd-slider-nav">
				<nav class="container">
					<span class="cd-marker item-1"></span>

					<ul>
						<li class="selected">
							<a href="#0">
							<div class="slide-number">
								1
							</div>
							<p>
								Good Work
							</p><span>Finding your Next Advisor</span></a>
						</li>
						<li class="">
							<a href="#0">
							<div class="slide-number">
								2
							</div>
							<p>
								Advice you can Count on
							</p><span>Export Financial Advice</span></a>
						</li>
						<li class="">
							<a href="#0">
							<div class="slide-number">
								3
							</div>
							<p>
								Become a Client
							</p><span>We have 15 Years Experience</span></a>
						</li>
						<li class="">
							<a href="#0">
							<div class="slide-number">
								4
							</div>
							<p>
								Testing and Executing
							</p><span>Doing the right thing</span></a>
						</li>
					</ul>
				</nav>
			</div>

		</section>

		<!-- Welcome section -->
		<section class="welcome">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>Welcome to <span><br>VIRTUAL BAB</span></h2>
						<p>
							Virtual BAB est une plateforme qui ...
						</p>
						<ul>
							<li>
								<i class="fa fa-star" aria-hidden="true"></i>

								B: Acronyme de Banque
							</li>
							<li>
								<i class="fa fa-star" aria-hidden="true"></i>

								A: Acronyme de Assurance
							</li>
							<li>
								<i class="fa fa-star" aria-hidden="true"></i>

								B: Acronyme de Bourse 
							</li>
						</ul>
						<a class="btn btn-default hvr-bounce-to-right" href="#" data-text="read-more">READ MORE</a>
					</div>
					<div class="col-md-6">
						<div class="video_gallery_container">
							<img class="img-responsive" src="img/video.jpg" alt="perfect video"/>
							<a class="btn-play fancybox-media"  href="https://www.youtube.com/watch?v=8krgqtm3mR4"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- our futured services section -->
 
         

		<!-- our services section -->
		
		<!-- our-numbers section -->
		<section class="our-numbers animated">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="why-choose-box">
							<h2>Advanced Analytics</h2>

							<p>
								Business analytics (BA) is the practice of iterative, methodical exploration of an
								<br>
								organization's data with emphasis on statistical analysis.
							</p>

						</div>
					</div>
				</div>
				<div class="row">
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="single-count-box"><span class="decor-line"></span>
              <div class="box">
                <div class="number-box"><span class="counter">15</span></div>
                <div class="text-box">
                  <p>Years of <br>Experiences</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="single-count-box"><span class="decor-line"></span>
              <div class="box">
                <div class="number-box"><span class="counter">44</span></div>
                <div class="text-box">
                  <p>Professional <br>Advisors</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="single-count-box"><span class="decor-line"></span>
              <div class="box">
                <div class="number-box"><span class="counter">66</span></div>
                <div class="text-box">
                  <p>new cases <br>every years</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="single-count-box"><span class="decor-line"></span>
              <div class="box">
                <div class="number-box"><span class="counter">98</span></div>
                <div class="text-box">
                  <p>Registered <br>Cases</p>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>
		<!-- our-news -->
		<section class="our-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-6 textArea wow slideInLeft" data-wow-duration="2s">
						<div class="header">
							<h2>FAQ's</h2>
						</div>
						<p>
							Business analytics (BA) is the practice of iterative, methodical exploration of an

							organization's data with emphasis on statistical analysis.
						</p>
						<p>
							Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain.
						</p>

						<p>
							Denouncing pleasure and praising pain was born and I will give you a complete account of the system, expound the actual teachings.
						</p>
						<a class="btn btn-default hvr-bounce-to-right" href="Faq.html" data-text="read-more">READ MORE</a>

					</div>
					<div class="col-md-6 tabs wow slideInRight">
						<div id="accordion" role="tablist">
							<div class="toggle">
								<div class="toggle-heading" role="tab">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-plus"></i>What is do i have to tell you a few lorem?<i class="fa fa-minus"></i></a>
								</div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
									<div class="toggle-body">
										<p>
											Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.
										</p>
									</div>

								</div>

							</div>
							<div class="toggle">
								<div class="toggle-heading" role="tab">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-plus"></i> What is do i have to tell you a few lorem?<i class="fa fa-minus"></i></a></a>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
									<div class="toggle-body">
										<p>
											Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.
										</p>
									</div>

								</div>

							</div>
							<div class="toggle">
								<div class="toggle-heading" role="tab">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-plus"></i>What is do i have to tell you a few lorem?<i class="fa fa-minus"></i></a></a>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
									<div class="toggle-body">
										<p>
											Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.
										</p>
									</div>

								</div>

							</div>
							<div class="toggle">
								<div class="toggle-heading" role="tab">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-plus"></i>What is do i have to tell you a few lorem?<i class="fa fa-minus"></i></a></a>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
									<div class="toggle-body">
										<p>
											Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.
										</p>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- our-team -->
		<section class="our-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header wow pulse">
							<h2>Meet Our Team</h2>
							<p>
								Business analytics (BA) is the practice of iterative, methodical exploration of an
								<br>
								organization's data with emphasis on statistical analysis.
							</p>
						</div>

					</div>
				</div>
				<div id="owl-carousel-team" class="owl-carousel owl-theme">
					<div class="item row team-wraper">

						<div class="col-md-5">
							<div class="team-member">
								<img src="img/team1.jpg" alt="" />
							</div>
						</div>
						<div class="col-md-7">

							<div class="our-team-info">
								<h3>Michael Bradly
								<br>
								<span>CEO</span></h3>
								<p>
									Company founder and CEO, Simon St Ledger, demonstrates a genuine passion for health and wellbeing, and this is evidenced by the rapid growth of the company. He has immersed himself in the health and wellness industry for the past two decades. He is well versed in life science, the practice and theory, having been a personal trainer and dietary consultant.
								</p>
							</div>
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

					<div class="item row team-wraper">

						<div class="col-md-5">
							<div class="team-member">
								<img src="img/team2.jpg" alt="" />
							</div>
						</div>
						<div class="col-md-7">

							<div class="our-team-info">
								<h3>Michael Bradly
								<br>
								<span>CEO</span></h3>
								<p>
									Company founder and CEO, Simon St Ledger, demonstrates a genuine passion for health and wellbeing, and this is evidenced by the rapid growth of the company. He has immersed himself in the health and wellness industry for the past two decades. He is well versed in life science, the practice and theory, having been a personal trainer and dietary consultant.
								</p>
							</div>
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
					<div class="item row team-wraper">

						<div class="col-md-5">
							<div class="team-member">
								<img src="img/team3.jpg" alt="" />
							</div>
						</div>
						<div class="col-md-7">

							<div class="our-team-info">
								<h3>Michael Bradly
								<br>
								<span>CEO</span></h3>
								<p>
									Company founder and CEO, Simon St Ledger, demonstrates a genuine passion for health and wellbeing, and this is evidenced by the rapid growth of the company. He has immersed himself in the health and wellness industry for the past two decades. He is well versed in life science, the practice and theory, having been a personal trainer and dietary consultant.
								</p>
							</div>
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

		</section>
		<!-- our-blogs -->
		<section class="our-blogs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h2>latest news</h2>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="blog-wraper">

							<div class="img-box">
								<div class="date">
									<p>
										21
										<br>
										Aug
									</p>
								</div>
								<a href="#" > <img src="img/blog1.jpg" alt=""/></a>
							</div>
							<div class="text-box">
								<div class="text">
									<h4>Retail banks wake up to digital</h4>
									<p>
										Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem
									</p>
								</div>
								<div class="post-meta">
									<p>
										by fletcher | April 21, 2016 <a class="pull-right" href="#">Read More</a>
									</p>

								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="blog-wraper">

							<div class="img-box">
								<div class="date">
									<p>
										21
										<br>
										Aug
									</p>
								</div>
								<a href="#" > <img src="img/blog2.jpg" alt=""/></a>
							</div>
							<div class="text-box">
								<div class="text">
									<h4>Retail banks wake up to digital</h4>
									<p>
										Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem
									</p>
								</div>
								<div class="post-meta">
									<p>
										by fletcher | April 21, 2016 <a class="pull-right" href="#">Read More</a>
									</p>

								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="blog-wraper">

							<div class="img-box">
								<div class="date">
									<p>
										21
										<br>
										Aug
									</p>
								</div>
								<a href="#" > <img src="img/blog3.jpg" alt=""/></a>
							</div>
							<div class="text-box">
								<div class="text">
									<h4>Retail banks wake up to digital</h4>
									<p>
										Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem
									</p>
								</div>
								<div class="post-meta">
									<p>
										by fletcher | April 21, 2016 <a class="pull-right" href="#">Read More</a>
									</p>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		

<!-- our testimonials section -->
		<section class="testimonials">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<header>
							<h2>Testimonials</h2>
						</header>
				

					</div>
					<div class="row">
						<div class="col-md-6">
							<blockquote>
								Totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab.Teritatis et quasi architecto. Sed ut perspi ciatis unde omnis iste natus error sit volu ptatem accusantium dolore mque.
							</blockquote>
							<div class="testimonials-author">
								<div class="author-img">
									<img class="img-responsive" src="img/testimonial1.jpg" />
								</div>
								<h4>Boris Hunt<br><span>Account Manager</span></h4>
								
							</div>
						</div>
						<div class="col-md-6">
							<blockquote>
								Totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab.Teritatis et quasi architecto. Sed ut perspi ciatis unde omnis iste natus error sit volu ptatem accusantium dolore mque.
							</blockquote>
							<div class="testimonials-author">
								<div class="author-img">
									<img class="img-responsive" src="img/testimonial1.jpg" />
								</div>
								<h4>Boris Hunt<br><span>Account Manager</span></h4>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- contact-us section -->
		<section class="contact-us">

			<div class="container">

				<div class="row">

					<div class="col-md-6">
						<h2>get in touch</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut.
						</p>
						<p>
							For Investment: Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem or phone +11 987 654 3210 ipsum quia dolor sit amet, consectetur.
						</p>
					</div>

					<div class="col-md-6">
						<form id="request-call-form" action="#" method="POST">

							<div class="col-md-12">
								
									<input id="name" type="text" placeholder="Name" name="name">
								
							</div>

							<div class="col-md-12">
								
									 <input id="email" type="text" placeholder="Email" name="email">
								
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control select">
										<option>I would like to discuss</option>
										<option>I would like to discuss</option>
										<option>I would like to discuss</option>
										<option>I would like to discuss</option>
										<option>I would like to discuss</option>
									</select>

								</div>
							</div>

							<div class="col-md-6">
								
									<input id="subject" type="text" placeholder="Subject" name="subject">
								
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" cols="40" rows="5" placeholder="Message" id="inputComments"></textarea>
									
									

								</div>

							</div>

						</form>
						<button type="submit" class="btn btn-default hvr-bounce-to-right" data-text="submit">
							SUBMIT
						</button>
					</div>

				</div>
			</div>

		</section>
		<!-- last section -->
		<section class="get-quote">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<h3>We Always Try to make a Difference</h3>
						<p>
							
						</p>
					</div>
					<div class="col-lg-3">
						<a class="btn btn-default hvr-bounce-to-right-reverse" href="#" data-text="read-more">GET A QUOTE</a>
					</div>
				</div>
			</div>

		</section>
<?php include 'footer.php'; ?>
