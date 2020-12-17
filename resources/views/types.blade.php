@extends('layouts.baseLayout')

@section('content')

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
				<a href="index">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Types</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- single -->
<div class="single-w3l py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-5">
			<h3 class="title">Types of Blood Donations</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
			<p class="mt-2">Want to know in what way you can donate?</p>
		</div>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tabmenu1" role="tabpanel">
				<div class="row inner_sec_info">
					<!-- left side -->
					<div class="col-lg-8 single-left">
					
						<div class="comments my-5">
							<h3 class="blog-title text-dark">Types of blood donations</h3>
							<div class="comments-grids mt-4">
								<div class="row comments-grid">
									<div class="col-3 comments-grid-left">
										<img src="images/a.jpg" alt=" " class="img-thumbnail" />
									</div>
									<div class="col-8 comments-grid-right mt-3">
										<h4>Whole Blood Donation</h4>												<p>Whole blood is the most flexible type of donation. It can be transfused in its original form, or used to help multiple people when separated into its specific components of red cells, plasma and platelets.
										</p>
									</div>
								</div>
								<div class="row comments-grid my-4">
									<div class="col-3 comments-grid-left">
										<img src="images/b.jpg" alt=" " class="img-thumbnail" />
									</div>
									<div class="col-8 comments-grid-right mt-3">
										<h4>Power Red Donation</h4>
										<p>During a Power Red donation, you give a concentrated dose of red cells, the part of your blood used every day for those needing transfusions as part of their care.</p>
									</div>
								</div>
								<div class="row comments-grid my-4">
									<div class="col-3 comments-grid-left">
										<img src="images/c.jpg" alt=" " class="img-thumbnail" />
									</div>
									<div class="col-8 comments-grid-right mt-3">
										<h4>Platelet Donation</h4>
										<p>In a platelet donation, an apheresis machine collects your platelets along with some plasma, returning your red cells and most of the plasma back to you. Platelets are most often used by cancer patients and others facing life-threatening injuries.</p>
									</div>
								</div>
								<div class="row comments-grid my-4">
									<div class="col-3 comments-grid-left">
										<img src="images/d.jpg" alt=" " class="img-thumbnail" />
									</div>
									<div class="col-8 comments-grid-right mt-3">
										<h4>Plasma Donation</h4>
										<p>During an AB Elite donation, you give plasma, a part of your blood used to treat patients in emergency situations. AB Elite maximizes your donation and takes just a few minutes longer than donating blood.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //left side -->
					<!-- right side -->
					<div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
						<div class="event-right1">
							<div class="categories my-4 p-4 border">
								<h3 class="blog-title text-dark">Blood Donation Process</h3>
								<ul>
									<li class="mt-3">
										<i class="fas fa-check mr-2"></i>
										<a>A pint of blood is drawn from the donor.</a>
									</li>
									<li class="mt-3">
										<i class="fas fa-check mr-2"></i>
										<a>Blood is collected and labeled in a sterile bag.</a>
									</li>
									<li class="mt-3">
										<i class="fas fa-check mr-2"></i>
										<a>Blood is transported to a lab for testing and processing.</a>
									</li>
									<li class="mt-3">
										<i class="fas fa-check mr-2"></i>
										<a>Blood is processed and spun down intro different components namely plasma, red blood cells and platelets.</a>
									</li>
									<li class="mt-3">
										<i class="fas fa-check mr-2"></i>
										<a>Blood is tested to ensure it is safe for transfusion.</a>
									</li>
									<li class="mt-3">
										<i class="fas fa-check mr-2"></i>
										<a>People post blood requests for specific needs.</a>
									</li>
									<li class="mt-3">
										<i class="fas fa-check mr-2"></i>
										<a>Blood products are stored and ready for transfusion. Platelets expire in 5 days, red blood cells in 42 days and plasma in 2 years.</a>
									</li>
									<li class="mt-3">
										<i class="fas fa-check mr-2"></i>
										<a>Blood is transferred to patients. 1 blood donation has the potential to save 3 lives.</a>
									</li>
								</ul>
							</div>	
						</div>
					</div>
					<!-- //right side -->
				</div>
			</div>
		</div>
		</div>
		<br>
		<br>

		<!-- //single -->
@endsection