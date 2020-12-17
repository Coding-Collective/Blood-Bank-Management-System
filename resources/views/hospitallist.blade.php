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
			<li class="breadcrumb-item active" aria-current="page">Hospital List</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- contact -->
<div class="appointment py-5">
	<div class="py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-5">
			<h3 class="title">View Hospital List</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
			<p class="mt-2">“Bring a life back to power. Make blood donation your responsibility”</p>
		</div>
	</div>

	<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
				@unless(empty($hospitals->name))
					<h1>No Hospitals Available :(</h1>	
				@endunless

				<!-- Table Records -->
				<div class="table100 ver2 m-b-110">
					<div class="table100-head">
						<table>
						<!-- Table Head Row -->
							<thead>
								<tr id="row100-head">
									<th class="cell100 column1">Hospital No.</th>
									<th class="cell100 column2">Name</th>
									<th class="cell100 column3">Address</th>
									<th class="cell100 column4">Contact No.</th>
								</tr>
							</thead>
						</table>
					</div>
				@foreach($hospitals as $hospital)
				<div class="table100-body js-pscroll">
					<table>
						<tbody>
							<tr class="row100 body">
								<td class="cell100 column1">{{ $loop->index+1 }}</td>
								<td class="cell100 column2">{{$hospital->name}}</td>
								<td class="cell100 column3">{{$hospital->address}}</td>
								<td class="cell100 column4">{{$hospital->contact}}</td>
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
<!-- </div> -->
<!-- //contact -->
@endsection