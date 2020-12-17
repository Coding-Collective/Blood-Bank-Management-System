@extends('layouts.baseLayout')

@section('content')

<div class="inner-banner-w3ls">
	<div class="container">

	</div>
	<!-- //banner 2 -->
</div>


<div class="breadcrumb-agile">
	<div aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="/">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Donate List</li>
		</ol>
	</div>
</div>

	<!-- final div -->
<div class="appointment py-5">
	<div class="py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-5">
			<h3 class="title">View Donor List</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
			<p class="mt-2">“Bring a life back to power. Make blood donation your responsibility”</p>
		</div>
	</div>

	<div class="limiter">
		<div class="container-table100">
		<div class="wrap-table100">
				@unless(empty($donors->name))
					<center>
						<h1>
							No Donors Available :(
						</h1>
					</center>
				@endunless

				<div class="table100 ver2 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr id="row100-head">
									<th class="cell100 column1">Donor No.</th>
									<th class="cell100 column2">Name</th>
									<th class="cell100 column3">Date of Birth</th>
									<th class="cell100 column4">Address</th>
									<th class="cell100 column5">Blood Group</th>
								</tr>
							</thead>
						</table>
					</div>
					
				@foreach($donors as $donor)
					<div class="table100-body js-pscroll">
					<table>
						<tbody>
							<tr class="row100 body">
								<td class="cell100 column1">{{ $loop->index+1 }}</td>
								<td class="cell100 column2">{{$donor->name}}</td>
								<td class="cell100 column3">{{$donor->dob}}</td>
								<td class="cell100 column4">{{$donor->address}}</td>
								<td class="cell100 column5">{{$donor->blood_group}}</td>
							</tr>
						</tbody>
					</table>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	</div>
</div>

@endsection