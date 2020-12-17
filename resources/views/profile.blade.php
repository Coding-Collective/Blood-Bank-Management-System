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
			<li class="breadcrumb-item active" aria-current="page">Profile</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- profile -->
<div class="main">
    <h1>Welcome {{ $users->name }}!</h1>
    <div id="navigation" style="display:none;" class="w3_agile">
        <ul>
            <li class="selected">
                <a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-folder" aria-hidden="true"></i><span>Records</span></a>
            </li>
        </ul>
    </div>
    <div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
        <div id="steps" style="margin:0 auto;" class="agileits w3_steps">
            <form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
                <fieldset class="step agileinfo w3ls_fancy_step">
                    <legend>Profile</legend>
                    <div class="abt-agile">
                        <div class="abt-agile-left">
                        </div>
                        <div class="abt-agile-right">
                            <h3>{{ $users->name }}</h3>
                            <ul class="address">
                                <li>
                                    <ul class="address-text">
                                        <li><b>E-MAIL </b></li>
                                        <li>: {{ $users->email }}</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="address-text">
                                        <li><b>SIGNED UP ON</b></li>
                                        <li>: {{$users->created_at}}</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                            <div class="clear"></div>
                    </div>
                </fieldset>
                <fieldset class="step wthree">
                    <legend>Blood Donation Record</legend>
                    <div class="work-w3agile">
                        <div class="work-w3agile-top">
                            <div class="agileits_w3layouts_work_grid1 w3layouts_work_grid1 hover14 column" style="color: white;">
                            <!-- Table Records -->
                            @unless(empty($donors->contact))
                                  <center>
                                    <h4>You have made 0 Blood Donation Requests</h4>	
                                  </center>
                            @endunless

                            <div class="table100 ver2 m-b-110">
                                <div class="table100-head">
                                    <table>
                                    <!-- Table Head Row -->
                                        <thead>
                                            <tr id="row100-head">
                                                <th class="cell100 column1">Sr. No.</th>
                                                <th class="cell100 column2">Address Provided</th>
                                                <th class="cell100 column3">Contact Provided</th>
                                                <th class="cell100 column4">Blood Group Requested</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            <div>
                            
                            <br>                        
                            @foreach($donors as $donor)
                            <div class="table100-body js-pscroll">
                                <table>
                                    <tbody>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">{{ $loop->index+1 }}</td>
                                            <td class="cell100 column2">{{$donor->address}}</td>
                                            <td class="cell100 column3">{{$donor->contact}}</td>
                                            <td class="cell100 column4">{{$donor->blood_group}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endforeach
                            </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- //profile -->
@endsection

<!-- 
    Name 
    Email
    Donate of the user
    Request of the user
 -->

