
<?php
   session_start();
if (isset($_COOKIE["user"])){
	$_SESSION['user_session']=$_COOKIE["user"];
	$_SESSION['user_name']=$_COOKIE["username"];
	$_SESSION['account_type']=$_COOKIE["account"];
}
?>

<!DOCTYPE html>

<html>
<head>
	<!-- META DATA -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Tera soft</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"  type="text/css">

	<!-- Owl Carousel Assets -->
	<link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
	<!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->

	<!-- Custom CSS -->

	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Custom Fonts -->
	<link rel="stylesheet" href="assets/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>


</head>

<body>
<header>

	<!-- /////////////////////////////////////////Navigation -->
	<nav id="nav" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1 class="navbar-brand page-scroll">
					<a href="#page-top">Tera Soft</a>
				</h1>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="index.php">Accueil</a>
					</li>
					<li>
						<a class="page-scroll" href="about.php">A propos</a>
					</li>
					<li>
						<a class="page-scroll" href="gallery.php">Nos Solutions</a>
					</li>
					<li>
						<a class="page-scroll" href="service.php">Nos Services</a>
					</li>
					<li>
						<a class="page-scroll" href="contact.php">Contact</a>
					</li>
					<?php
					if (!(isset($_SESSION['user_session']))){
						?>
						<li>
							<a class="cd-signup" role="button" data-toggle="modal" data-target="#login-modal">Login</a>
						</li>
					<?php } else {?>
						<li>
							<a   id="menu1" data-target="#dropdown" data-toggle="dropdown"><?php echo $_SESSION['user_name']." " ?><span <i class="fa fa-chevron-down"</i></span></a>
							<ul class="dropdown-menu dropdown-menu-right " role="menu" aria-labelledby="menu1">
								<?php  if($_SESSION['account_type']==2) {echo '<li role="presentation"><a role="menuitem" href="#">Panier</a></li>';}
								else{ echo '<li  class="dropdown-click" role="presentation"><a role="menuitem"   href="Admin">Admin Panel</a></li>';}?>
								<li class="divider-vertical"></li>
								<li class="page-scroll" role="presentation"><a role="menuitem" href="#">Profile</a></li>
								<li role="presentation"><a role="menuitem" href="#">JavaScript</a></li>
								<li role="presentation" class="divider"></li>
								<li role="presentation"><a role="menuitem" href="logout.php" >Logout</a></li>
							</ul>
						</li>

					<?php }?>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>


	<!-- BEGIN # MODAL LOGIN -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="images/logo.png">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>

				<!-- Begin # DIV Form -->
				<div id="div-forms">

					<!-- Begin # Login Form -->
					<form id="login-form" method="Post" >
						<div class="modal-body">
							<div id="div-login-msg">
								<div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-login-msg">Type your username and password.</span>
							</div>
							<input name="login_username"id="login_username" class="form-control" type="text" placeholder="Username" required>
							<input name="login_password"id="login_password" class="form-control" type="password" placeholder="Password" required>
							<div class="checkbox">
								<label></label>
								<input type="checkbox" name="remeber_me"  name="remeber_me" value="remeber"> Remember me
							</div>
						</div>
						<div class="modal-footer">
							<div>
								<button  name="login_button" type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
							</div>
							<div>
								<button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
								<button id="login_register_btn" type="button" class="btn btn-link">Register</button>
							</div>
						</div>
					</form>
					<!-- End # Login Form -->

					<!-- Begin | Lost Password Form -->
					<form id="lost-form" style="display:none;" method="post">
						<div class="modal-body">
							<div id="div-lost-msg">
								<div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-lost-msg">Type your e-mail.</span>
							</div>
							<input id="lost_email" name="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
						</div>
						<div class="modal-footer">
							<div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
							</div>
							<div>
								<button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
								<button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
							</div>
						</div>
					</form>
					<!-- End | Lost Password Form -->

					<!-- Begin | Register Form -->
					<form id="register-form" style="display:none;" method="post">
						<div class="modal-body">
							<div id="div-register-msg">
								<div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-register-msg" style="" >Register an account.</span>
							</div>
							<input id="register_username" name="register_username" class="form-control" type="text" placeholder="Username" required>
							<input id="register_firsName" name="register_firsName" class="form-control" type="text" placeholder="First Name" required>
							<input id="register_SecondName"name="register_SecondName" class="form-control" type="text" placeholder="Second Name" required>
							<input id="register_email" name="register_email" class="form-control" type="text" placeholder="E-Mail" required>
							<input id="register_password" name="register_password" class="form-control" type="password" placeholder="Password" required>
						</div>
						<div class="modal-footer">
							<div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
							</div>
							<div>
								<button id="register_login_btn" type="button" class=" btn btn-link" >Log In</button>
								<button id="register_lost_btn"  class=" btn btn-link" type="button">Lost Password?</button>
							</div>
						</div>
					</form>
					<!-- End | Register Form -->

				</div>
				<!-- End # DIV Form -->

			</div>
		</div>
	</div>

	<!-- Navigation -->
	<div class="box-shadow">
		<!-- Carousel -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/banner-mobile-app.png" alt="First slide">
				</div>
				<div class="item">
					<img src="images/banner-web-development.png" alt="Second slide">
				</div>
				<div class="item">
					<img src="images/banner-web-design.png" alt="Third slide">
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</div>
</header>


<!-- /////////////////////////////////////////Content -->
<div id="page-content">

	<!-- ////////////Content Box 01 -->
	<section class="box-content box-1 box-style-1" id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="box-item">
						<div class="wrap-img">
							<img src="images/key.png" />
						</div>
						<h3 class="services-heading">UN SITE WEB UNIQUE ET ACCROCHEUR</h3>
						<p>Avec une conception attrayante et professionnelle vous allez attirer l’attention des clients qui recherchent vos services et ils navigueront plus longtemps sur votre site internet. </p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box-item">
						<div class="box-item">
							<div class="wrap-img">
								<img src="images/money.png" />
							</div>
							<h3 class="services-heading">TRANSFORMER LES VISITES EN CLIENTS PAYANT</h3>
							<p>Les visites générées par votre site à chaque heures se transformeront en appels par les clients ainsi qu’en vente en ligne et augmenterons visiblement votre chiffre d’affaires.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box-item">
						<div class="box-item">
							<div class="wrap-img">
								<img src="images/days.png" />
							</div>
							<h3 class="services-heading">UN MAXIMUM DE VISITES SUR VOTRE SITE WEB</h3>
							<p>Grâce à nos garanties de Visibilité vous allez attirer un maximum d’internautes parmi les milliers qui cherchent vos services sur le net à chaque moment de la journée.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ////////////Content Box 02 -->
	<section class="box-content box-2" id="services">
		<div class="container">
			<div class="row heading">
				<div class="col-lg-12">
					<h2>TOP HOLIDAY DESTINATIONS</h2>
					<hr>
					<div class="intro">Lorem ipsum dolor sit amet</div>
				</div>
			</div>
			<div class="categories">
				<ul class="cat">
					<li>
						<ol class="type list-inline">
							<li><a href="#" data-filter="*" class="active">All</a></li>
							<li><a href="#" data-filter=".lake_wanaka">Lake Wanaka</a></li>
							<li><a href="#" data-filter=".ohama_beach">Ohama Beach</a></li>
							<li><a href="#" data-filter=".taupo_central">Taupo Central</a></li>
						</ol>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>

			<div class="row">
				<div class="portfolio-items">
					<div class="col-sm-6 col-md-3 col-lg-3 taupo_central">
						<div class="post">
							<div class="item-container wow fadeInUp" data-wow-delay="200ms">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<a class="example-image-link" href="images/2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
												<i class="fa fa-search"></i>
											</a>
										</div>
									</div>
								</div>
								<img src="images/2-thumb.jpg" />
							</div>
							<span>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.</span>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 taupo_central">
						<div class="post">
							<div class="item-container wow fadeInUp" data-wow-delay="200ms">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<a class="example-image-link" href="images/1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
												<i class="fa fa-search"></i>
											</a>
										</div>
									</div>
								</div>
								<img src="images/1-thumb.jpg" />
							</div>
							<span>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.</span>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 taupo_central">
						<div class="post">
							<div class="item-container wow fadeInUp" data-wow-delay="200ms">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<a class="example-image-link" href="images/2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
												<i class="fa fa-search"></i>
											</a>
										</div>
									</div>
								</div>
								<img src="images/2-thumb.jpg" />
							</div>
							<span>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.</span>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 lake_wanaka">
						<div class="post">
							<div class="item-container wow fadeInUp" data-wow-delay="200ms">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<a class="example-image-link" href="images/3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
												<i class="fa fa-search"></i>
											</a>
										</div>
									</div>
								</div>
								<img src="images/3-thumb.jpg" />
							</div>
							<span>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.</span>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 lake_wanaka">
						<div class="post">
							<div class="item-container wow fadeInUp" data-wow-delay="200ms">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<a class="example-image-link" href="images/4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
												<i class="fa fa-search"></i>
											</a>
										</div>
									</div>
								</div>
								<img src="images/4-thumb.jpg" />
							</div>
							<span>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.</span>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 lake_wanaka">
						<div class="post">
							<div class="item-container wow fadeInUp" data-wow-delay="200ms">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<a class="example-image-link" href="images/1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
												<i class="fa fa-search"></i>
											</a>
										</div>
									</div>
								</div>
								<img src="images/1-thumb.jpg" />
							</div>
							<span>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.</span>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 ohama_beach">
						<div class="post">
							<div class="item-container wow fadeInUp" data-wow-delay="200ms">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<a class="example-image-link" href="images/3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
												<i class="fa fa-search"></i>
											</a>
										</div>
									</div>
								</div>
								<img src="images/3-thumb.jpg" />
							</div>
							<span>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.</span>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 ohama_beach">
						<div class="post">
							<div class="item-container wow fadeInUp" data-wow-delay="200ms">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<a class="example-image-link" href="images/4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
												<i class="fa fa-search"></i>
											</a>
										</div>
									</div>
								</div>
								<img src="images/4-thumb.jpg" />
							</div>
							<span>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ////////////Content Box 04 -->
	<section class="box-content box-4 box-style-1" id="news">
		<div class="container">
			<div class="row heading">
				<div class="col-lg-12">
					<h2>TESTIMONIALS</h2>
					<hr class="line02">
					<div class="intro">Lorem ipsum dolor sit amet</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-item">
						<div class="wrap-img">
							<img src="images/people1.jpg" class="img-circle" alt="">
						</div>
						<p>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. </p>
						<div class="info">
							WILL SMITH
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-item">
						<div class="wrap-img">
							<img src="images/people2.jpg" class="img-circle" alt="">
						</div>
						<p>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. </p>
						<div class="info">
							WILL SMITH
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-item">
						<div class="wrap-img">
							<img src="images/people3.jpg" class="img-circle" alt="">
						</div>
						<p>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. </p>
						<div class="info">
							WILL SMITH
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>

<!-- FOOTER -->
<footer>
	<div class="top-footer">
		<div id="owl-brand" class="owl-carousel">
			<div class="item">
				<a href="single.html"><img src="images/15.jpg" /></a>
			</div>
			<div class="item">
				<a href="single.html"><img src="images/16.jpg" /></a>
			</div>
			<div class="item">
				<a href="single.html"><img src="images/17.jpg" /></a>
			</div>
			<div class="item">
				<a href="single.html"><img src="images/18.jpg" /></a>
			</div>
			<div class="item">
				<a href="single.html"><img src="images/19.jpg" /></a>
			</div>
			<div class="item">
				<a href="single.html"><img src="images/20.jpg" /></a>
			</div>
			<div class="item">
				<a href="single.html"><img src="images/21.jpg" /></a>
			</div>
		</div>
	</div>
	<div class="wrap-footer">
		<div class="container">
			<div class="row">
				<div class="col-footer col-md-4">
					<h2 class="footer-title">About Us</h2>
					<div class="textwidget">Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. <br> <br>
						Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan.</div>
				</div>
				<div class="col-footer col-md-4 widget_recent_entries">
					<h2 class="footer-title">Recent Posts</h2>
					<ul>
						<li><a href="#">MOST VISITED COUNTRIES</a></li>
						<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
						<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
						<li><a href="#">STARTUP COMPANY&#8217;S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
					</ul>
				</div>
				<div class="col-footer col-md-4">
					<h2 class="footer-title">NEWS LETTER</h2>
					If you want to receive our latest news send directly to your email, please leave your email address bellow. Subscription is free and you can cancel anytime.
					<form action="#" method="post">
						<input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
						<input type="submit" value="SUBSCRIBE" class="btn btn-3" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p>Copyright 20xx - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> Designed by <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">365BOOTSTRAP</a></p>
				</div>
				<div class="col-md-4">
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="https://www.facebook.com/365bootstrap"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="list-inline quicklinks">
						<li><a href="#">Privacy Policy</a>
						</li>
						<li><a href="#">Terms of Use</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- jQuery -->
<script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="assets/js/agency.js"></script>

<!-- Plugin JavaScript -->
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/cbpAnimatedHeader.js"></script>

<script type="text/javascript" src="assets/js/wow.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.isotope.js"></script>
<script type="text/javascript" src="assets/js/js.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>


<!-- carousel -->
<script src="assets/owl-carousel/owl.carousel.js"></script>

<script>
	$(document).ready(function() {
		$("#owl-brand").owlCarousel({
			autoPlay: 3000,
			items : 6,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [979,2],
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		});



	});
</script>

</body>
</html>