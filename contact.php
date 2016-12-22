
<?php
   session_start();
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
						<a class="page-scroll dropdown-toggle" href="service.php">Nos Services</a>
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
						<div class="dropdown" id="dropdown">
							<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
								<?php  if($_SESSION['account_type']==2) {echo '<li role="presentation"><a role="menuitem" href="#">Panier</a></li>';}
								else{ echo '<li role="presentation"><a role="menuitem" href="Admin">Admin Panel</a></li>';}?>

								<li class="divider-vertical"></li>
								<li role="presentation"><a role="menuitem" href="#">Profile</a></li>
								<li role="presentation"><a role="menuitem" href="#">JavaScript</a></li>
								<li role="presentation" class="divider"></li>
								<li role="presentation"><a role="menuitem" href="logout.php" >Logout</a></li>
							</ul>
						</div>
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
					<form id="lost-form" style="display:none;">
						<div class="modal-body">
							<div id="div-lost-msg">
								<div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-lost-msg">Type your e-mail.</span>
							</div>
							<input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
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
					<form id="register-form" style="display:none;">
						<div class="modal-body">
							<div id="div-register-msg">
								<div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-register-msg" style="" >Register an account.</span>
							</div>
							<input id="register_username" name="register_username" class="form-control" type="text" placeholder="Username" required>
							<input id="register_firsName" name="register_firsName" class="form-control" type="password" placeholder="First Name" required>
							<input id="register_Second Name"name="register_Second Name" class="form-control" type="password" placeholder="Second Name" required>
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
		
		<!-- ////////////Content Box -->
		<section class="box-content box-style-1">
			<div class="container">
				<div class="row heading">
					 <div class="col-lg-12">	
	                    <h2>CONTACT</h2>
	                    <hr class="line02">
                    	<div class="intro">Lorem ipsum dolor sit amet</div>
	                </div>
				</div>
				<div class="row">
				<div class='embed-container maps'>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
				</div>
					<div class="col-md-4 box-item wow fadeInLeft">
						<h3>Contact Info</h3>
						<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
						<p>JL.Kemacetan timur no.23. block.Q3<br>
							Jakarta-Indonesia</p>
						   <p>+6221 888 888 90 <br>
							+6221 888 88891</p>
						<p>info@yourdomain.com</p>
					</div>
					<div class="col-md-8 wow fadeInRight">
						<h3>Contact Form</h3>
						<form id="ff" name="form1" method="post" action="contact.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
									</div>						
									<button type="submit" class="btn btn-skin btn-lg page-scroll wow fadeInUp" name="submitcontact" id="submitcontact">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		
	</div>
	
	<!-- FOOTER -->
	<footer>
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
	<script type="text/javascript" src="assets/js/js.js"></script>

	
	<script src="assets/js/lightbox-plus-jquery.min.js"></script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>