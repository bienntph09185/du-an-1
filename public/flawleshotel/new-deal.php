<?php
session_start();
require_once 'utils.php';
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from envato.megadrupal.com/html/flawleshotel/new-deal.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:48:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<title>New Deal Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<!-- /////////////////// LINK STYLE  /////////////////// -->
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
				<div class="md-body clearfix">
					<div id="md-news-deal" class="md-news-deal masonry-container masonry">
						<article class="media media-center">
							<figure>
								<a href="room-detail.php"><img src="img/news-deal/news-deal-1.jpg" alt="" class="media-object" width="380" height="496"></a>
							</figure>
							<div class="media-body">
								<h3 class="media-header h4"> <a href="room-detail.php">Cras condimentum sit amet orci et gravida.</a></h3>
								<p class="media-content">Morbi vel cursus lacus. Nulla tempor, erat at ullamcorper ullamcorper, sem quam egestas diam, nec facilisis urna nulla sit amet enim.</p>
							</div>
						</article>
						<article class="media media-center">
							<header class="box-heading heading-large">
								N
								<div class="decription-override">
									<h2 class="h1">News & Deal</h2>
									<p>what's happening</p>
								</div>
							</header>
							<div class="media-body">
								<p class="media-content">Mauris egestas, tellus sed venenatis tincidunt, odio diam iaculis augue, nec tincidunt enim odio id arcu. Ut pellentesque, quam ut sagittis adipiscing</p>
							</div>
						</article>
						<article class="media media-center">
							<figure>
								<a href="room-detail.php"><img src="img/news-deal/news-deal-3.jpg" alt="" class="media-object" width="380" height="496"></a>
							</figure>
							<div class="media-body">
								<h3 class="media-header h4"> <a href="room-detail.php">Cras condimentum sit amet orci et gravida</a></h3>
								<p class="media-content">Phasellus a velit et sem posuere luctus mollis id dui. Maecenas ullamcorper bibendum diam vitae suscipit ac posuere felis libero vitae odio.</p>
							</div>
						</article>
						<article class="media media-center">
							<figure>
								<a href="room-detail.php"><img src="img/news-deal/news-deal-4.jpg" alt="" class="media-object" width="380" height="238"></a>
							</figure>
							<div class="media-body">
								<h3 class="media-header h4"><a href="room-detail.php">Sed euismod ante non felis fringilla facilisis ut ac sem</a></h3>
								<p class="media-content">Praesent feugiat at est ac feugiat. Sed euismod ante non felis fringilla facilisis ut ac sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
							</div>
						</article>
						<article class="media media-center">
							<figure>
								<a href="room-detail.php"><img src="img/news-deal/news-deal-8.jpg" alt="" class="media-object" width="380" height="238"></a>
							</figure>
							<div class="media-body">
								<h3 class="media-header h4"><a href="room-detail.php">Nullam ultricies eros eu euismod aliquam</a></h3>
								<p class="media-content">Etiam consectetur nisi ut eros posuere, et auctor mi iaculis. Sed cursus elit bibendum ipsum luctus fringilla. Praesent molestie pretium urna, vel interdum justo aliquam vel..</p>
							</div>
						</article>
						<article class="media media-center">
							<figure>
								<a href="room-detail.php"><img src="img/news-deal/news-deal-2.jpg" alt="" class="media-object" width="380" height="238"></a>
							</figure>
							<div class="media-body">
								<h3 class="media-header h4"><a href="room-detail.php">Sed quis arcu vel orci iaculis fermentum a eget nulla</a></h3>
								<p class="media-content">Vestibulum justo magna, vestibulum vel auctor in, accumsan sed metus. Morbi sed semper lacus. Etiam consectetur nisi ut eros posuere.</p>
							</div>
						</article>
						<article class="media media-center">
							<figure>
								<a href="room-detail.php"><img src="img/news-deal/news-deal-5.jpg" alt="" class="media-object" width="380" height="496"></a>
							</figure>
							<div class="media-body">
								<h3 class="media-header h4"> <a href="room-detail.php">Cras condimentum sit amet orci et gravida</a></h3>
								<p class="media-content">Morbi vel cursus lacus. Nulla tempor, erat at ullamcorper ullamcorper, sem quam egestas diam, nec facilisis urna nulla sit amet enim.</p>
							</div>
						</article>
						<article class="media media-center">
							<figure>
								<a href="room-detail.php"><img src="img/news-deal/news-deal-7.jpg" alt="" class="media-object" width="380" height="496"></a>
							</figure>
							<div class="media-body">
								<h3 class="media-header h4"><a href="room-detail.php">Nunc porta sapien porta fringilla scelerisque</a></h3>
								<p class="media-content">Morbi vel cursus lacus. Nulla tempor, erat at ullamcorper ullamcorper, sem quam egestas diam, nec facilisis urna nulla sit amet enim.</p>
							</div>
						</article>
						<article class="media media-center">
							<figure>
								<a href="room-detail.php"><img src="img/news-deal/news-deal-9.jpg" alt="" class="media-object" width="380" height="496"></a>
							</figure>
							<div class="media-body">
								<h3 class="media-header h4"> <a href="room-detail.php">Cras condimentum sit amet orci et gravida</a></h3>
								<p class="media-content">Morbi vel cursus lacus. Nulla tempor, erat at ullamcorper ullamcorper, sem quam egestas diam, nec facilisis urna nulla sit amet enim.</p>
							</div>
						</article>
						<article class="media media-center">
							<figure>
								<a href="room-detail.php"><img src="img/news-deal/news-deal-6.jpg" alt="" class="media-object" width="380" height="238"></a>
							</figure>
							<div class="media-body">
								<h3 class="media-header h4"> <a href="room-detail.php">Sed euismod ante non felis fringilla</a> </h3>
								<p class="media-content">Fusce in libero vitae dolor porta pellentesque sed eget odio. Duis commodo, nisi non suscipit aliquam, sem nibh accumsan neque.</p>
							</div>
						</article>
					</div>
					<div class="form-group clear media-center">
						<a id="load-more" class="btn btn-alter btn-border btn-border-brown" href="#">Load more</a>
					</div>
				</div><!-- /.md-testimonail -->
			</div><!-- /.md-wrapper  -->

			
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

	
	 <!-- /////////////////// LINKS SCRIPT /////////////////// -->
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.3.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/mlpushmenu.js"></script>
	<script type="text/javascript" src="js/jquery.masonry.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			"use strict";
			var newdeal = document.querySelector('#md-news-deal');
			var loadmore = document.querySelector('#load-more');
			
			var  msnry = new Masonry(newdeal,{
				itemSelector: '.media-center',
		        columnWidth: 400,
		        isFitWidth: true
			});

			$("#load-more").bind("click",function(event){
				event.preventDefault();
				$.get("loadmore.php",function(response){
					var data = $(response).filter("article.media-center");
					console.log(data);
					$("#md-news-deal").append(data);
					msnry.appended(data);
				},'html')
			})


		 jQuery(function(){
		     jQuery('.view-content').masonry({
		          // options
		         itemSelector : '.views-row'
		      });
		  });

 
		});
	</script>
</body>

<!-- Mirrored from envato.megadrupal.com/html/flawleshotel/new-deal.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:48:15 GMT -->
</html>