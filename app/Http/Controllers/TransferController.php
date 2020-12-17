<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{
    	$transfer = new Transfer();
    	$transfer->rbc = request('rbc');
    	$transfer->wbc = request('wbc');
    	$transfer->blood_report_no = request('blood_report_no');
    	$transfer->acceptor_hospital = request('acceptor_hospital');
    	$transfer->donor_hospital = request('donor_hospital');
    	$transfer->acceptor_uid = request('acceptor_uid');
    	$transfer->donor_uid = request('donor_uid');
    	$transfer->save();
}
