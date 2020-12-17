@extends('layouts.baseLayout')

@section('content')

<!-- banner 2 -->
<div class="inner-banner-w3ls">
	<div class="container">

	</div>
	<!-- //banner 2 -->
</div>
<!-- page details -->
<div class="breadcrumb-agile">
	<div aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="/">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">About Us</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- about -->
<section class="about py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-md-5 mb-4">
			<h3 class="title">About Us</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
		</div>
		<p class="aboutpara text-center mx-auto">
		Scarcity of rare blood groups.
		Unavailability of blood during emergencies.
		Less awareness among people about blood donation and blood transfusion.
		Deaths due to lack of blood during operations.
		The WeCare project aims to make all the procedures automated and therefore with computer systems it can be more fast and accurate.
		This project is a high-quality software to manage all these cumbersome jobs.
		Donate blood now and save a life!
		</p>

		<div class="row about_grids mt-5">
			<div class="col-lg-4">
				<img src="images/blog1.jpg" alt="" class="img-fluid" />
				<h3 class="mt-3 text-dark">Blood Donation Drive held in South Delhi 2020</h3>
				<p class="my-3">Residents of Hiranandani Gardens participate in the annual blood donation drive in huge numbers</p>
				<a href="#">Read More</a>
			</div>
			<div class="col-lg-4 my-lg-0 my-5">
				<img src="images/blog2.jpg" alt="" class="img-fluid" />
				<h3 class="mt-3 text-dark">Blood Donation awareness Drive held in Goregaon, Mumbai 2019</h3>
				<p class="my-3">Youth of the bombay youth club join hands to spread awareness</p>
				<a href="#">Read More</a>
			</div>
			<div class="col-lg-4">
				<img src="images/blog3.jpg" alt="" class="img-fluid" />
				<h3 class="mt-3 text-dark">Medical Insurance Awareness</h3>
				<p class="my-3">Dr.Shika Rawaat talks to the Doctors Cell Mumbai in The Doctors Annual Seminar'19</p>
				<a href="#">Read More</a>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- middle section -->
<div class="w3ls-welcome py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="row">
			<div class="col-lg-5 welcome-right">
				<img src="images/b2.png" alt=" " class="img-fluid">
			</div>
			<div class="col-lg-7 welcome-left mt-4">
				<h3>Medical and Health Awareness Week</h3>
				<h6 class="mt-3">WeCare annual awareness drive</h6>
				<h4 class="my-4 font-italic">
					To participate, click on the link below!
				</h4>
				<div class="readmore-w3-agileits mt-md-5 mt-4">
					<a href="#" class="w3ls-button-agile text-dark">Participate</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //middle section -->

<!-- team -->
<section class="team py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-5">
			<h3 class="title">Our Doctors</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
			<p class="mt-2">WeCare : For you because you value.</p>
		</div>
		<div class="row inner-sec-w3layouts-agileinfo">
			<div class="col-md-4 team-grids text-center">
				<img src="images/t1.jpg" class="img-fluid" alt="">
				<div class="team-info">
					<div class="caption">
						<h4></h4>
						<h6>Blood Transfusion Specialist</h6>
					</div>
					<div class="social-icons-section">
						<a class="fac" href="#">
							<i class="fab fa-facebook"></i>
						</a>
						<a class="twitter" href="#">
							<i class="fab fa-twitter-square"></i>
						</a>
						<a class="pinterest" href="#">
							<i class="fab fa-pinterest"></i>
						</a>

					</div>

				</div>
			</div>
			<div class="col-md-4 team-grids my-md-0 my-4 text-center">
				<img src="images/bg6.jpg" class="img-fluid" alt="">
				<div class="team-info">
					<div class="caption">
						<h4></h4>
						<h6>Plasma & Platlets Specialist</h6>
					</div>
					<div class="social-icons-section">
						<a class="fac" href="#">
							<i class="fab fa-facebook"></i>
						</a>
						<a class="twitter" href="#">
							<i class="fab fa-twitter-square"></i>
						</a>
						<a class="pinterest" href="#">
							<i class="fab fa-pinterest"></i>
						</a>

					</div>
				</div>
			</div>
			<div class="col-md-4 team-grids text-center">
				<img src="images/hematologist.jpg" class="img-fluid" alt="">
				<div class="team-info">
					<div class="caption">
						<h4></h4>
						<h6>Hematologist</h6>
					</div>
					<div class="social-icons-section">
						<a class="fac" href="#">
							<i class="fab fa-facebook"></i>
						</a>
						<a class="twitter" href="#">
							<i class="fab fa-twitter-square"></i>
						</a>
						<a class="pinterest" href="#">
							<i class="fab fa-pinterest"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- team -->

<!-- banner bottom -->
<div class="banner-bottom py-5">
	<div class="d-flex container py-xl-3 py-lg-3">
		<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
			<h6 class="text-white">WeCare : For you because you value.</h6>
			<h3 class="text-white my-3">Highly professional doctors</h3>
			<p>All specialists have extensive practical experience and regularly training courses in educational centers of the
				world</p>
		</div>
		<div class="button">
			<a href="/about" class="w3ls-button-agile">Read More
				<i class="fas fa-hand-point-right"></i>
			</a>
		</div>
	</div>
</div>
<!-- //banner bottom -->

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
						<h4 class="text-dark font-weight-bold mb-3">Blood Donors List</h4>
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
						<h4 class="text-dark font-weight-bold mb-3">How to Find Blood Donors</h4>
						<p>We find blood donors in your area : Get list of blood donors nearby</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 agileits-w3layouts-grid img text-center">
				<img src="images/b3.png" alt=" " class="img-fluid" />
			</div>
			<div class="col-lg-4 agileits-w3layouts-grid">
				<div class="row wthree_agile_us">
					<div class="col-9 agile-why-text-2">
						<h4 class="text-dark font-weight-bold mb-3">Blood Donation Facilities</h4>
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
						<h4 class="text-dark font-weight-bold mb-3">Post Blood Request</h4>
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

@endsection