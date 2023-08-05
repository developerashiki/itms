<?php
$conn = mysqli_connect('localhost', 'root', '', 'dbms');
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en-US">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>ITMS</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png" />

	<!-- Stylesheet -->
	<!-- Animate css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="all" />
	<!-- Owl Carousel css -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css" media="all" />
	<!-- Fontawesome CSS -->
	<!-- <link rel="stylesheet" href="assets/css/fontawesome-all.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- normalize -->
	<link rel="stylesheet" href="assets/css/normalize.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive css -->
	<link rel="stylesheet" href="assets/css/responsive.css" />


</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
	<!-- header_aria -->

	<div class="header_area">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="logo">
						<a href="index.html"><img src="assets/images/logo/logo.png" alt="logo" alt="" /></a>
						<span><i class="fas fa-bars"></i></span>
					</div>
				</div>
				<div class="col-md-8">
					<div class="main_menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="service.php">Our Service</a></li>
							<li><a href="course.php">Course</a></li>
							<li><a href="industrialtraining.php">Industrial Traning</a></li>
							<li><a href="contact.php">Contact</a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Start Contact Area -->
	<section class="contact-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<!-- Section Hadding -->
					<div class="section-heading">
						<h2>Contact</h2>
						<h3>Please feel free to contact me about anything.</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
					<div class="about-me-content">
						<div class="about-me-social">

							<div class="about-social-content">
								<h6>Industrial Training Management System</h6>

								<a href="mailto:iffatesd@gmail.com">iffatesd@gmail.com</a>
								<p><a href="tel:+8801744863070">Cell: +8801744863070, +8801516780874</a></p>
								<p>218, west Kafrul, Prodhan Mansion (5th floor)</p>
								<p>Taltola, Dhaka-1216, Bangladesh</p>
							</div>
						</div>
						<!-- Social Contact -->
						<div class="about-social-icon">
							<ul>
								<li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
								<li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
								<li><a href=""><i class="fa-brands fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa-brands fa-at" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa-brands fa-skype" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa-brands fa-pinterest-p" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- contact box -->
				<div class=" col-sm-6  col-md-6col-xl-6 col-lg-6">
					<!-- Contact Form -->
					<div class="contact-box">
						<form action="store.php" method="POST">
							<div class="contact-input">
								<input required type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Name">
								<input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="E-mail">
								<input type="text" class="form-control" name="subject" aria-describedby="emailHelp" placeholder="Subject">
								<textarea type="text" class="form-control" name="message" aria-describedby="emailHelp" placeholder="message" cols="30" rows="10"></textarea>
							</div>
							<div class="contact-submit">
								<input type="submit" value="Send">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Area -->
	<!-- start footer area -->
	<div class="footer-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-6">
					<div class="footer-service">
						<h2>Technology</h2>
						<ul>
							<li>Computer</li>
							<li>Electrical</li>
							<li>Civil</li>
							<li>Architechture</li>
						</ul>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 col-6">
					<div class="footer-Course">
						<h2>Page</h2>
						<div class="footer-page">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="service.html">Our Service</a></li>
								<li><a href="course.html">Course</a></li>
								<li><a href="industrialtraining.html">Industrial Traning</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 col-6">
					<div class="footer-page">
						<h2>Facebook Page</h2>
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fprofile.php%3Fid%3D100069366155024&tabs=timeline&width=300&height=150&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-address">
						<ul>
							<li>iffatesd@gmail.com, Cell: +8801744863070, +8801516780874, 218, west Kafrul, Prodhan Mansion (5th floor), Taltola, Dhaka-1216, Bangladesh</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>







	<!-- Js Files -->
	<!-- modernizr -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- jQuery -->
	<script type="text/javascript" src="assets/js/vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap Popper -->
	<script src="assets/js/popper.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Custom Scripts -->
	<script src="assets/js/main.js"></script>


</body>

</html>