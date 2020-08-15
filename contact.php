<?php
// Free Bootstrap Themes : www.Html5xCss3.com

$text = "<span class='fail'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$to = "alfidhacall@gmail.com";
	$subject = "Html5xCss3 - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "alfidhacall@gmail.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span class='success'>Your Message was sent successfully !</span>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="GBF Official website">
    <meta name="author" content="https://rayifka.github.io/rayif/#">
	
    <title>Essential | Free Bootstrap Themes</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/lightbox.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="single-page">
	<div class="wrap-body">
		<!-- Intro -->
		<div id="intro">
			<span class="line-1">the</span>
			<span class="line-2">GBF GROUP</span>
			<span class="line-3">QUALITY WITH US</span>
			<span class="line-4"><a href="#">group of business friends</a></span>
		</div>

		<header id="page-header">
			<!--Navigation-->
			<nav id="menu" class="navbar">
				<div class="container">
					<div class="row">
					<div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
					  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="single.html">About Us</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li class="active"><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					</div>
				</div>
			</nav>
		</header>
		
		<!-- /////////////////////////////////////////Content -->
		<div id="page-content" class="container">
			<div class="row">
				<!-----------------Content-------------------->
				<section class="box-content box-2 box-style-0">
					<div class="flex-box no-gutter">
						<div class="col-sm-12">
							<div class="box-text">
								<div class="box-text-inner pd-exlarge-lg pd-small-xs">
									<div class="heading">
										<h2>Contact Us</h2>
									</div>
									<!--Warning-->
									<?php echo $text;?>
									<!---->
									<form class="clearfix" role="form" id="contactForm" method="post" action="contact.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="required" />
												</div>
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required" />
												</div>
												<div class="form-group">
													<input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" required="required" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Message"></textarea>
												</div>	
											</div>
										</div>
										<button type="submit" id="form-submit" class="btn btn-skin pull-right">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<footer id="page-footer" class="footer-contact">
			<div class="wrap-footer container">
				<div class="row">
					<div class="flex-box no-gutter">
						<!-- Map and address -->
						<div class="col-lg-12">
							<div class="contact-info">
								<!-- Show Info Button -->
								<a href="#" class="show-info-link"><i class="fa fa-info"></i> Show info</a>
								<div id="map" style="height: 550px;"></div>
								<address class="contact-info-wrapper">
									<ul class="list-unstyled">
										<!-- Address -->
										<li class="contact-group">
										  <span class="adr-heading">Address</span>
										  <span class="adr-info">100 Street, Il, US</span>
										</li>
										<!-- Email -->
										<li class="contact-group">
										  <span class="adr-heading">Email</span>
										  <span class="adr-info">sayhello@email.com</span>
										</li>
									</ul>
									<ul class="list-unstyled">
										<!-- Phone -->
										<li class="contact-group">
										  <span class="adr-heading">Phone</span>
										  <span class="adr-info">+ 123 4567 890</span>
										</li>
										<!-- Mobile -->
										<li class="contact-group">
										  <span class="adr-heading">Mobile</span>
										  <span class="adr-info">+ 123 4567 890</span>
										</li>
									</ul>                  
									<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63087.15919140844!2d76.88807222209171!3d8.791007708053478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05db56d87ec5f9%3A0x4c893b29d2fe9137!2sKummil%2C%20Kerala%2C%20India!5e0!3m2!1sen!2sae!4v1596802948582!5m2!1sen!2sae" class="show-map"><i class="fa fa-map-o"></i> Show on map</a>
								</address>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<p>Copyright 20xx - Designed by <a href="https://www.html5xcss3.com">HTML5xCSS3</a></p>
						</div>
						<div class="col-md-6">
							<ul class="list-inline social-link">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/Html5xCss3"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="list-inline quicklinks">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms of Use</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- Footer -->

	
	</div><!-- .wrap-body -->
	
	
	<!-- jQuery and Plugin-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Google Map -->
    <script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63087.15919140844!2d76.88807222209171!3d8.791007708053478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05db56d87ec5f9%3A0x4c893b29d2fe9137!2sKummil%2C%20Kerala%2C%20India!5e0!3m2!1sen!2sae!4v1596802948582!5m2!1sen!2sae" async defer></script>
	<!-- Logo -->
	<script src="js/arctext.min.js"></script>
	<script>
		$(document).ready(function() {
		  $(".line-2").arctext({radius: 400});
		});
	</script>
	
</body>
</html>