<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acceptor;
use App\AcceptorSelect;
use App\Transfer;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }


    public function store(Request $request) {

    	$acceptor = new Acceptor();
    	$acceptor -> name = request('name');
    	$acceptor -> dob = request('dob');
    	$acceptor -> address = request('address');
    	$acceptor -> contact = request('contact');
    	$acceptor -> deficiencies = request('deficiencies');
    	$acceptor -> blood_group = request('blood_group');

        $acceptor -> save();

		$currentAcceptor = Acceptor::latest()->first();
		$acceptorSelect = new AcceptorSelect();
		$acceptorSelect -> hospital_id = request('hospital');
    	$acceptorSelect -> acceptor_uid_no = $currentAcceptor->uid_no;

        $acceptorSelect -> save();

        $joinData = DB::table('transfers')
            ->join('donors', 'donors.uid_no', '=', 'transfers.donor_uid')
            ->select('transfers.*', 'donors.blood_group')
            ->where([
                ['transfers.acceptor_uid', '=', null],
                ['donors.blood_group', '=', $acceptor->blood_group],
                ])
            ->first();

        if( $joinData ){              //if there already is a row where match can be made in transfers table
            
            $currentTransferId = $joinData -> transfer_id;
            $currentTransfer = Transfer::find($currentTransferId);

            $currentTransfer -> acceptor_uid = Acceptor::latest()->first() -> uid_no;     //get the latest acceptor uid
            $currentTransfer -> acceptor_hospital = $acceptorSelect->hospital_id;       //current hospital choice

            $currentTransfer->save();
        }else{                      //if no match is available in the current rows of transfers table

            $transfer = new Transfer();
            $transfer -> acceptor_hospital = request('hospital');
            $transfer -> acceptor_uid = Acceptor::latest()->first()-> uid_no;      //get the latest acceptor uid
            $transfer -> rbc = null;
            $transfer -> wbc = null;
            $transfer -> blood_report_no = null;
            $transfer -> donor_hospital = null;
            $transfer -> donor_uid = null;

            $transfer -> save();
        }

        $request->session()->flash('head', 'Success!');

        $request->session()->flash('message', 'Your blood request was saved!');

        return redirect()->back();
        
    }
}
