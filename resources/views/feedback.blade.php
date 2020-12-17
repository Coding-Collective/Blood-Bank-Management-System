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
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Feedback</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- <div class="agileits-contact py-5"> -->
	<!-- <div class="py-xl-5 py-lg-3"> -->
		<!-- <div class="w3ls-titles text-center mb-5"> -->
		<div class="contact1">
			<div class="container-contact1">
				<div class="contact1-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="/create-feedback" method="post" class="contact1-form validate-form">
					@csrf
					<span class="contact1-form-title">
						Please type in your feedback to improve this website
					</span>

					<div class="wrap-input1 validate-input" data-validate = "Name is required">
						<input class="input1" type="text" name="name" placeholder="Enter Name">
						<span class="shadow-input1"></span>
					</div>

					<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input1" type="text" name="email" placeholder="Enter Email">
						<span class="shadow-input1"></span>
					</div>

					<div>
					<h5>How much would your rate this website?</h5>
					<div>
					<br>
					<center>
						<label><input type="radio" name="rating" id="str1" value="1"><label  id="rating" for="str1">1</label></label>
						<label><input type="radio" name="rating" id="str2" value="2"><label  id="rating" for="str2">2</label></label>
						<label><input type="radio" name="rating" id="str3" value="3"><label  id="rating" for="str3">3</label></label>
						<label><input type="radio" name="rating" id="str4" value="4"><label  id="rating" for="str4">4</label></label>
						<label><input type="radio" name="rating" id="str5" value="5"><label  id="rating" for="str5">5</label></label>      
					</center>      
					</div >
					<br>
					
					<div id="checkk">
					<h5>Any suggestions to make our website better?</h5>
					<div class="wrap-input1 validate-input">
						<input class="input1" type="text" name="suggestions" placeholder="Suggestions">
						<span class="shadow-input1"></span>
					</div>
					<br>
				
					<div  >
					<h5>Did we miss anything on this website?</h5>
					<div class="wrap-input1 validate-input">
						<input class="input1" type="text" name="input" placeholder="If Yes, please input.">
						<span class="shadow-input1"></span>
					</div>
					<br>
					
					<div id="checkk">
					<h5>Would you recommend our website to others?</h5>
					<div>
					<br>
					<center>
						<label><input type="radio" name="recommend" id="str1" value="1"><label  id="recommend" for="str1">Yes</label></label>
						<label><input type="radio" name="recommend" id="str2" value="2"><label  id="recommend" for="str2">Maybe</label></label>
						<label><input type="radio" name="recommend" id="str3" value="3"><label  id="recommend" for="str3">No</label></label>     
					</center>      
					</div >
					<br>
					
					<div class="wrap-input1 validate-input" data-validate = "Message is required">
						<textarea class="input1" name="message" placeholder="Any other comments"></textarea>
						<span class="shadow-input1"></span>
					</div>

					<div class="container-contact1-form-btn">
						<button class="contact1-form-btn">
							<span>
								Submit Feedback
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</span>
						</button>
					</div>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>

<br>

@endsection