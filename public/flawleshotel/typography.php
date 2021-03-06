<?php
session_start();
require_once 'utils.php';
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from envato.megadrupal.com/html/flawleshotel/typography.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:48:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<title>Typography</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/libs/jquery-ui-1.10.3.custom.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/responsive-menu.css">


	<!-- Fix ie9  -->
	<!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie9.css">
	<![endif]-->

</head>
<body>
	<!-- PRELOADER -->
	<div id="preloader">
		<span class="loader" data-loading-text="loading">
		</span>
	</div>
	<!-- END / PRELOADER -->
	<div class="md-hotel">
		<div id="mp-pusher" class="mp-pusher">
			<header class="md-header">
				<div class="container clearfix">
					<div class="grid_12">

						<!-- Logo -->
						<h1 class="md-logo">
							<a href="<?=BASE_URL?>index.php">
								<img src="images/logo.png" alt="logo">
							</a>
						</h1>
						


						<!-- Menu -->
						<nav id="main-nav" class="nav-collapse">
							<ul id="main-menu" class="md-menu">
								<li><a href="<?=BASE_URL?>index.php">Home</a></li>
								<li><a href="accomodation.php">Accomodation</a></li>
								<li class="have-submenu"><a href="#">Pages</a>
									<div class="sub-menu">
										<ul class="sub-menu-inner">
											<li><a href="blog.php">Blog</a></li>
											<li><a href="testimonial.php">Testimonials</a></li>
											<li><a href="shortcode.php">Shortcode</a></li>
											<li><a href="typography.php">Typography</a></li>
											<li><a href="booking-cart.php">Booking Cart</a></li>
											<li><a href="checkout.php">CheckOut</a></li>
											<li><a href="check-available.php">Check Available</a></li>
										</ul>
									</div>
								</li>
								<li><a href="new-deal.php">news &amp; deals</a></li>
								<li><a href="world-of-flawles.php">world of flawles</a></li>
								<li><a href="contact.php">contact</a></li>
							</ul>
						</nav>
						<!-- Icon Responsvie Menu -->
						<a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>

						<!-- Language Bar -->
						<ul class="language-bar">
							<li><a href="#"><img src="images/english.png" alt="english"></a></li>
							<li><a href="#"><img src="images/croatian.png" alt="croatian"></a></li>
							<li><a href="#"><img src="images/german.png" alt="german"></a></li>
							<li><a href="#"><img src="images/slovenian.png" alt="slovenian"></a></li>
							<li><a href="#"><img src="images/czech.png" alt="czech"></a></li>
							<li><a href="#"><img src="images/french.png" alt="french"></a></li>
						</ul>

						

					</div>
				</div>
			</header><!-- /.md-header -->


			<!-- Menu Responsive -->
			<nav id="mp-menu" class="mp-menu alternate-menu mp-overlap right-side">
	            <div class="mp-level">
	                <h2>Menu</h2>
	                <ul>
	                	<li>
	                    	<a href="<?=BASE_URL?>index.php">Home</a>
	                    </li>
	                    <li>
	                    	<a href="accomodation.php">Accomodation</a>
	                    </li>
	                    <li class="has-sub">
	                        <a href="#">Pages</a>
	                        <div class="mp-level">
	                            <h2>Pages</h2>
	                            <a class="mp-back" href="#">Back</a>
	                            <ul>
	                                <li><a href="blog.php">Blog</a></li>
									<li><a href="testimonial.php">Testimonials</a></li>
									<li><a href="shortcode.php">Shortcode</a></li>
									<li><a href="typography.php">Typography</a></li>
									<li><a href="booking-cart.php">Booking Cart</a></li>
									<li><a href="checkout.php">CheckOut</a></li>
									<li><a href="check-available.php">Check Available</a></li>
	                            </ul>
	                        </div>
	                    </li>
	                    <li>
	                        <a href="new-deal.php">News &amp; deals</a>
	                    </li>
	                    <li>
	                        <a href="world-of-flawles.php">World of flawles</a>
	                    </li>
	                    <li>
	                    	<a href="contact.php">Contact</a>
	                    </li>
	                </ul>
	            </div>
	        </nav>
	        <!-- Menu Responsive End -->

			<div class="container">
				<div class="md-body md-typography">
					<div class="row row-alter-110 clearfix">
						<article class="box">
							<header class="grid_12 box-heading">
								<h3 class="head headline">Heading</h3>
							</header>
							<div class="box-body clearfix">
								<div class="grid_6">
									<article class="box box-alter-80">
										<header class="box-heading heading-large">
											H
											<div class="decription-override">
												<h2 class="h1">H1 heading</h2>
												<p>some text about this page</p>
											</div>
										</header>
										<div class="box-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu justo id dolor gravida porta ut nec metus. Ut tincidunt, massa sed ornare tristique, lorem lacus bibendum est</p>
										</div>
									</article><!-- /.h1-heading -->
									<article class="box">
										<header class="box-heading h2-heading">
											<h2 class="h2">H2 Heading</h2>
										</header>
										<div class="box-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu justo id dolor gravida porta ut nec metus. Ut tincidunt, massa sed ornare tristique, lorem lacus bibendum est</p>
										</div>
									</article><!-- /.h2-heading -->
								</div>
								<div class="grid_6">
									<article class="box box-alter-40">
										<header class="box-heading">
											<h3 class="h3"> H3 Heading</h3>
										</header>
										<div class="box-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu justo id dolor gravida porta ut nec metus. Ut tincidunt, massa sed ornare tristique, lorem lacus bibendum est</p>
										</div>
									</article><!-- /.h3-heading -->
									<article class="box box-alter-40">
										<header class="box-heading">
											<h4 class="h4">H4 Heading</h4>
										</header>
										<div class="box-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu justo id dolor gravida porta ut nec metus. Ut tincidunt, massa sed ornare tristique, lorem lacus bibendum est</p>
										</div>
									</article><!-- /.h4-heading -->
									<article class="box box-alter-40">
										<header class="box-heading">
											<h5 class="h5">H3 Heading</h5>
										</header>
										<div class="box-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu justo id dolor gravida porta ut nec metus. Ut tincidunt, massa sed ornare tristique, lorem lacus bibendum est</p>
										</div>
									</article><!-- /.h5-heading -->
									<article class="box">
										<header class="box-heading">
											<h6 class="h6">H6 Heading</h6>
										</header>
										<div class="box-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu justo id dolor gravida porta ut nec metus. Ut tincidunt, massa sed ornare tristique, lorem lacus bibendum est</p>
										</div>
									</article><!-- /.h6-heading -->
								</div>
							</div>
						</article>
					</div><!-- /.row -->
					<div class="row row-alter-110 clearfix">
						<div class="grid_6">
							<article class="box">
								<header class="box-heading">
									<h3 class="head headline">HTML Styles</h3>
								</header>
								<div class="box-body">
									<p>Lorem ipsum dolor sit amet, <span class="text-bold">consectetur adipiscing elit</span>. Pellentesque eu justo id dolor gravida porta ut nec metus. Ut tincidunt, massa sed ornare tristique, Pellentesque fringilla suscipit tellus, a porta est dignissim eu. <span class="text-line-through">Integer tristique</span> eros quis magna vehicula, sit amet hendrerit erat sagittis. Nulla aliquam, sem ac porttitor fermentum, mi odio sodales nulla, <a href="#" class="text-link">sit amet tristique</a> lacus massa quis dui. <span class="text-hightlight">Quisque eu enim id orci volutpat</span> vestibulum et nec dui. Morbi vel augue euismod, ultricies nulla dapibus, sodales sapien. <span class="text-underline">Vivamus laoreet</span> lacinia tempus.
									</p>
								</div>
							</article>
						</div>
						<div class="grid_6">
							<article class="box">
								<header class="box-heading">
									<h3 class="head headline">Block quotes</h3>
								</header>
								<div class="box-body">
									<div class="box-quote box-quote-alter">
										<p>Donec vel imperdiet mauris. Duis pellentesque, erat a dictum dictum, felis lorem rutrum augue, ac dignissim quam quam in mi. Aliquam consectetur nisl mi, vitae suscipit mauris tempus et. Suspendisse ipsum arcu, pharetra eget aliquam suscipit, commodo et turpis.</p>
									    <a href="#" class="text-link link-direct">Curabitur Rhoncus, Designer</a>
									</div>
								</div>
							</article>
						</div>
					</div><!-- /.row -->
					<div class="row row-alter-110 clearfix">
						<article class="box box-bullet-list">
							<header class="grid_12 box-heading">
								<h3 class="head headline">Bullets & lists</h3>
							</header>
							<div class="box-body clearfix">
								<div class="grid_3">
									<ul class="list list-check">
										<li>Maecenas posuere enim tellus, eu tur</li>
										<li>Leo consequat id. Donec eget nunc </li>
										<li>Morbi et mattis ipsum. Vivamus</li>
										<li>Nunc elementum semper mattis</li>
									</ul>
								</div>
								<div class="grid_3">
									<ul class="list list-triangle">
										<li>Cras condimentum  </li>
										<li>Nibh et pellentesque conguea eros</li>
										<li>Leo nibh gravida velit, ac rhoncus </li>
										<li>Tortor augue a eros</li>
									</ul>
								</div>
								<div class="clear"></div>
								<div class="grid_3">
									<ul class="list list-triangle list-triangle-color">
										<li>Cras condimentum  </li>
										<li>Nibh et pellentesque conguea eros</li>
										<li>Leo nibh gravida velit, ac rhoncus </li>
										<li>Tortor augue a eros</li>
									</ul>
								</div>
								<div class="grid_3">
									<ol class="list list-order-color">
										<li><span>Maecenas posuere enim tellus, eu tur</span></li>
										<li><span>Leo consequat id. Donec eget nunc</span></li>
										<li><span>Morbi et mattis ipsum. Vivamus</span></li>
										<li><span>Nunc elementum semper mattis</span></li>
									</ol>
								</div>
							</div>
						</article>
					</div><!-- /.row -->
				</div>
			</div><!-- /.md-wrapper  .md-typography -->

			
			<footer class="md-footer">
				<div class="container clearfix">
					<div class="grid_12">
						<div class="grid_3 footer-column inner-left">
							<div class="hotel-address">
								<h3>Flawles Hotel</h3>
								<div class="footer-content">
									<address>
										<p>125 West 26th Street</p>
										<p>Suite 600 New York, NY 10011</p>
									</address>
									<p class="website">© Flawles.com</p>
								</div>
							</div>
						</div>
						<div class="grid_5 footer-column">
							<div class="hotel-contact">
								<h3>Contact</h3>
								<ul class="footer-content">
									<li>telephone <span class="hotel-number">(012) 345-6789</span></li>
									<li>fax <span class="hotel-number">(012) 345-6789</span></li>
									<li>reservations <span class="hotel-number">(012) 345-6789</span></li>
								</ul>
							</div>
						</div>
						<div class="grid_4 footer-column inner-right">
							<div class="hotel-news">
								<h3>Newsletter</h3>
								<div class="footer-content">
									<p>Sign up for our newsletter, and we’ll keep you updated on all events at Flawles!</p>
									<form>
										<input type="text"><button type="submit" class="btn btn-brown">Send</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_12">
						<div class="footer-social">
							<div class="social-inner">
								<h4>Follow us</h4>
								<span class="social-group">
									<a href="#"><i class="icon icon-facebook"></i></a>
									<a href="#"><i class="icon icon-twitter"></i></a>
									<a href="#"><i class="icon icon-google"></i></a>
									<a href="#"><i class="icon icon-dribbble"></i></a>
								</span>
							</div>
						</div>
					</div>
				</div>	
			</footer><!-- /.md-footer -->
		</div>
	</div>


<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/mlpushmenu.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
	$(function() {
		"use strict";
		$("#arrival-date, #departure-date").datepicker({
			// showOn: "button",
			// buttonImage: "images/calendar.gif",
			// buttonImageOnly: true
		});
	});
</script>
</body>

<!-- Mirrored from envato.megadrupal.com/html/flawleshotel/typography.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:48:12 GMT -->
</html>