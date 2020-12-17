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
			<li class="breadcrumb-item active" aria-current="page">Request Blood</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- contact -->
<div class="appointment py-5">
	<div class="py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-5">
			@if(session()->has('message'))
			    <div class="alert alert-success text-center">
			          <strong>{{ Session::get('head') }} </strong> {{ Session::get('message') }}
			     </div>
			@endif
			<h3 class="title">Post Your Blood Request</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
			<p class="mt-2">“Bring a life back to power. Make blood donation your responsibility”</p>
		</div>
		<div class="d-flex">
		<div class="contact-right-w3l appoint-form">
				<h5 class="title-w3 text-center mb-5">Fill your blood request form</h5>
				<form action="/index" method="post">
				@csrf	
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Name</label>
						<input type="text" class="form-control" placeholder="Your Name " name="name" id="recipient-name" required="">
					</div>
					<div class="form-group">
						<label for="recipient-phone" class="col-form-label">Date of birth</label>
  						<input type="date" class="form-control" id="DOB" name="dob" required="">
  					</div>
					<div class="form-group">
						<label for="recipient-phone" class="col-form-label">Address</label>
						<input type="text" class="form-control" placeholder="Your Address" name="address" id="recipient-address" required="" >
					</div>
					<div class="form-group">
						<label for="recipient-phone" class="col-form-label">Contact</label>
						<input type="number" class="form-control" placeholder="Your Contact No" name="contact" id="recipient-phone" required="" >
					</div>				
					<div class="form-group">
						<label for="recipient-phone" class="col-form-label">Deficiencies</label>
						<input type="text" class="form-control" placeholder="Your Deficiencies" name="deficiencies" id="" required="">
					</div>
					<div class="form-group">
						<label for="datepicker" class="col-form-label">Blood Group</label>
						<select required="" class="form-control" name="blood_group">
							<option value="">---Select---</option>
							<option value="O+ve">O+ve</option>
							<option value="A+ve">A+ve</option>
							<option value="B+ve">B+ve</option>
							<option value="AB+ve">AB+ve</option>
							<option value="O-ve">O-ve</option>
							<option value="A-ve">A-ve</option>
							<option value="B-ve">B-ve</option>
							<option value="AB-ve">AB-ve</option>
						</select>
					</div>
					<div class="form-group">
						<label for="datepicker" class="col-form-label">Hospital</label>
						<select required="" class="form-control" name="hospital">
							<option value="">---Select---</option>
							@foreach($hospitals as $hospital )
								<option value="{{$hospital->hospital_id}}">{{$hospital->name}}</option>
							@endforeach
						</select>
					</div> 
					<center>
						<input type="submit" value="Post Request" class="btn_apt">
					</center>
				</form>
		</div>
		</div>
	</div>
</div>
<!-- //contact -->
@endsection