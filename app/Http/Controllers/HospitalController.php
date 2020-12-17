<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
   	 	$hospital = new hospital();
    	$hospital->hospital_id = hospital('hospital_id');
    	$hospital->name = hospital('name');
    	$hospital->address = hospital('address');
    	$hospital->contact = hospital('contact');
    	$hospital->save();
}
