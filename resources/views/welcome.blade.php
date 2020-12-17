<!-- @if (Route::has('login'))
	<div class="top-right links">
		@auth
			<a href="{{ url('/home') }}">Home</a>
		@else
			<a href="{{ route('login') }}">Login</a>

			@if (Route::has('register'))
				<a href="{{ route('register') }}">Register</a>
			@endif
		@endauth
@endif -->


<!DOCTYPE html>
<html lang="zxx">

<head>
<title>WeCare | Blood Bank</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="WeCare" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->
	
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="https://img.icons8.com/color/100/000000/drop-of-blood.png"/>
	<!-- //Favicon -->
</head>

<body>
	<!-- header -->
	<header>
		<!-- top-bar -->
		<div class="top-bar py-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 top-social-agile">
						<div class="row">
							<!-- social icons -->
							<ul class="col-lg-4 col-6 top-right-info text-center">
								<li>
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="mx-3">
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li class="ml-3">
									<a href="#">
									<i class="fab fa-slack"></i>
									</a>
								</li>
							</ul>
							<!-- //social icons -->
							<div class="col-6 header-top_w3layouts pl-3 text-lg-left text-center">
								<p class="text-white">
									<i class="fas fa-map-marker-alt mr-2"></i>Mumbai, India</p>
							</div>
						</div>
					</div>
					<div class="col-lg-5 top-social-agile text-lg-right text-center">
						<div class="row">
							<div class="col-lg-7 col-6 top-w3layouts">
								<p class="text-white">
									<i class="far fa-envelope-open mr-2"></i>
									<a href="mailto:info@example.com" class="text-white">wecare@gmail.com</a>
								</p>
							</div>
							<div class="col-lg-5 col-6 header-w3layouts pl-4 text-lg-left">
								<p class="text-white">
									<i class="fas fa-phone mr-2"></i>+91 0000000000</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<div id="home">
		<!-- navigation -->
		<div class="main-top py-1">
			<nav class="navbar navbar-expand-lg navbar-light fixed-navi">
				<div class="container">
					<!-- logo -->
					<h1>
						<a class="navbar-brand font-weight-bold font-italic" href="/">
							<img src="https://img.icons8.com/doodle/100/000000/drop-of-blood--v1.png" alt="blood logo" style="width:50px;height:50px;">
							<span>We</span>Care
						</a>
					</h1>
					<!-- //logo -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item dropdown mx-lg-4 my-lg-0 my-3">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								    aria-haspopup="true" aria-expanded="false">
									Why donate blood?
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="/single">Reasons to donate blood</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/types">Types of blood donation</a>
								</div>
							</li>
							
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="/feedback">Feedback</a>
							</li>

							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="/donate">Donate Blood</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="/request">Request Blood</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href=""></a>
							</li>
							
						<!-- login -->
						<!-- <a class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" href="/login" data-toggle="modal" data-target="#exampleModalCenter1">
						<i class="fas fa-user-md"></i> </a> -->
						@if (Route::has('login'))
						@auth
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
							<a class="nav-link" href="{{ url('/home') }}">Home</a>
							</li>
                        @else
						<li class="nav-item mx-lg-4 my-lg-0 my-3">

                        	<a  class="nav-link" href="{{ route('login') }}">Login</a>
							</li>
                        @if (Route::has('register'))
						<li class="nav-item mx-lg-4 my-lg-0 my-3">

                            <a class="nav-link" href="{{ route('register') }}">Register</a>
							</li>

                        @endif
						@endauth
						@endif
			
						<!-- //login -->
						</ul>

					</div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->

	</div>
	</div>
	<!-- //header 2 -->
    

<!-- banner --> 
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides callbacks callbacks1" id="slider4">
			<li>
				<div class="banner-top1">
					<div class="banner-info_agile_w3ls">
						<div class="container">
							<h3>Donate Blood Today & 
								<span>Save Lives</span>
							</h3>
							<p class="mt-3 mb-md-5 mb-3">WeCare : For you because you value.</p>
							<a href="/about">Read More
								<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</li>
			<p> </p>
			<li>
				<div class="banner-top2">
					<div class="banner-info_agile_w3ls">
						<div class="container">
							<h3>India has a shortage of 
								<span>2 Million Blood Units</span>
							</h3>
							<p class="mt-3 mb-md-5 mb-3">We, the youth, can make India Blood Sufficient.</p>
							<a href="/about">Read More
								<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</li>
			<p> </p>
			<li>
				<div class="banner-top3">
					<div class="banner-info_agile_w3ls">
						<div class="container">
							<h3>Help us make India Blood Sufficient
								<span>for the future, today</span>
							</h3>
							<p class="mt-3 mb-md-5 mb-3">You can make a difference.</p>
							<a href="/about">Read More
								<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
<!-- //banner -->
<div class="clearfix"></div>

<!-- services -->
<div class="why-choose-agile pt-5" id="services">
	<div class="container pt-xl-5 pt-lg-3">
		<div class="w3ls-titles text-center mb-5">
			<h3 class="title">Our Best Services</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
			<p class="mt-2">WeCare : For you because you value.</p>
		</div>
		<div class="row why-choose-agile-grids-top">
			<div class="col-lg-4 agileits-w3layouts-grid">
				<div class="row wthree_agile_us">
					<div class="col-3 agile-why-text p-0 text-right">
						<div class="wthree_features_grid">
							<i class="fas fa-user-md"></i>
						</div>
					</div>
					<div class="col-9 agile-why-text-2">
						<h4 class="text-dark font-weight-bold mb-3">
						<a href="/donatelist">Blood Donors List</a></h4>
						<p>Our volunteer blood donors list : Download list of blood donors</p>
					</div>
				</div>
				<div class="row wthree_agile_us my-5">
					<div class="col-3 agile-why-text p-0 text-right">
						<div class="wthree_features_grid">
							<i class="fas fa-syringe"></i>
						</div>
					</div>
					<div class="col-9 agile-why-text-2">
						<h4 class="text-dark font-weight-bold mb-3">
						<a href="/types">Types of Blood Donation</a>
						</h4>
						<p>Get to know the types of Blood Donations</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 agileits-w3layouts-grid img text-center">
				<img src="images/b3.png" alt=" " class="img-fluid" />
			</div>
			<div class="col-lg-4 agileits-w3layouts-grid">
				<div class="row wthree_agile_us">
					<div class="col-9 agile-why-text-2">
						<h4 class="text-dark font-weight-bold mb-3">
						<a href="/hosptitallist">View Hospital List</a></h4>
						<p>Donate blood & save lives : You can donate blood and save lives</p>
					</div>
					<div class="col-3 agile-why-text p-0">
						<div class="wthree_features_grid">
							<i class="fas fa-medkit"></i>
						</div>
					</div>
				</div>
				<div class="row wthree_agile_us my-5">
					<div class="col-9 agile-why-text-2">
						<h4 class="text-dark font-weight-bold mb-3">
						<a href="/donate">Post Blood Request</a></h4>
						<p>Find blood donors in your location make blood requests within 2 minutes</p>
					</div>
					<div class="col-3 agile-why-text p-0">
						<div class="wthree_features_grid">
						<i class="fab fa-medrt"></i>
						</div>
					</div>
				</div>
			<br><br><br><br>
			</div>
		</div>
	</div>
</div>
<!-- //services -->

<!-- banner bottom -->
<div class="banner-bottom py-5">
	<div class="d-flex container py-xl-3 py-lg-3">
		<img src="images/trust.png" alt="image here" style="width:200px;height:200px;">
		<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
			<h6 class="text-white">Here at WeCare we provide the best</h6>
			<h3 class="text-white my-3">High professional doctors</h3>
			<p>All specialists have extensive practical experience and regularly training.&nbsp;&nbsp;&nbsp;&nbsp;</p>
		</div>
		<div class="button">
			<a href="/about" class="w3ls-button-agile">Read More
				<i class="fas fa-hand-point-right"></i>
			</a>
		</div>
	</div>
</div>
<!-- //banner bottom -->

<!-- treatments -->
<div class="screen-w3ls py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-5">
			<h3 class="title">Best Blood Bank Facilities</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
			<p class="mt-2">WeCare : For you because you value.</p>
		</div>
		<div class="row">
			<div class="col-lg-6 w3ls-wthree-screen text-center">
				<img src="images/b2.png" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 w3ls-wthree-texts mt-5">
				<div class="row icons-screen">
					<div class="col-3 screen-agile text-right">
						<i class="fas fa-syringe"></i>
					</div>
					<div class="col-9 screen-agile-2">
						<h5 class="mb-3">Donor Motivation</h5>
						<p>Donor Recruitment - Voluntary and Replacement and Donor Blood Collection – Inhouse and Mobile Camps.</p>
					</div>
				</div>
				<div class="row icons-screen mt-5">
					<div class="col-3 screen-agile text-right">
						<i class="fab fa-medrt"></i>
					</div>
					<div class="col-9 screen-agile-2">
						<h5 class="mb-3">Donor Counselling</h5>
						<p>Antibody screening and Identification.</p>
					</div>
				</div>
				<div class="row icons-screen mt-5">
					<div class="col-3 screen-agile text-right">
						<i class="fab fa-medrt"></i>
					</div>
					<div class="col-9 screen-agile-2">
						<h5 class="mb-3">Pre Transfusion Testing</h5>
						<p>Compatibility testing ABO/RH Semi and fully Automated.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //treatments -->

<!-- footer -->
<footer>
		<div class="w3ls-footer-grids pt-sm-4 pt-3">
			<div class="container py-xl-5 py-lg-3">
				<div class="row">
					<div class="col-md-4 w3l-footer">
						<h2 class="mb-sm-3 mb-2">
							<a href="/" class="text-white font-italic font-weight-bold">
								<span>We</span>Care
								<i class="fas fa-syringe ml-2"></i>
							</a>
						</h2>
						<p> We at WeCare make sure that we have safe and adequate blood supplies, reduced turnaround time and prevention of blood wastage. We also have a Bio-Medical Waste Management System for disposal of discarded blood and other waste generated during this process. Lets build a community that cares for others.</p>
					</div>
					<div class="col-md-4 w3l-footer my-md-0 my-4">
						<h3 class="mb-sm-3 mb-2 text-white">Address</h3>
						<ul class="list-unstyled">
							<li>
								<i class="fas fa-location-arrow float-left"></i>
								<p class="ml-4">
									<span>Mumbai, India</span></p>
								<div class="clearfix"></div>
							</li>
							<li class="my-3">
								<i class="fas fa-phone float-left"></i>
								<p class="ml-4">+91 00000000</p>
								<div class="clearfix"></div>
							</li>
							<li>
								<i class="far fa-envelope-open float-left"></i>
								<a href="mailto:info@example.com" class="ml-3">wecare@gmail.com</a>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
					<div class="col-md-4 w3l-footer">
						<h3 class="mb-sm-3 mb-2 text-white">Quick Links</h3>
						<div class="nav-w3-l">
							<ul class="list-unstyled">
								<li>
									<a href="/">Home</a>
								</li>
								<li class="mt-2">
									<a href="/about">About Us</a>
								</li>
								<li class="mt-2">
									<a href="/contact">Contact Us</a>
								</li>
								<li class="mt-2">
									<a href="/types">Types of blood donation</a>
								</li>
								<li class="mt-2">
									<a href="/single">Why donate blood?</a>
								</li>
								<li class="mt-2">
									<a href="/donate">Donate Blood</a>
								</li>
								<li class="mt-2">
									<a href="/request">Request Blood</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
					<p class="copy-right-grids mt-lg-1">© 2020 WeCare. All Rights Reserved | Design by
						<a href="/" target="_blank">Chelsea, Rebecca and Delicia</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- Gallery-js -->
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.hoverdir.js"></script>
	<script>
		$(function () {

			$(' #da-thumbs > li ').each(function () {
				$(this).hoverdir();
			});

		});
	</script>

	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css">
	<!--light-box-files -->
	<script>
		$(function () {
			$('.da-thumbs a').Chocolat();
		});
	</script>
	<!-- Gallery-js -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>
</html>