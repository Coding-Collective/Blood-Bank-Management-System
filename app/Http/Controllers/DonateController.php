<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\DonorSelect;
use App\Transfer;
use Illuminate\Support\Facades\DB;

class DonateController extends Controller
{


	public function __construct(){
        $this->middleware('auth');
	}
    
    public function index(){
        $donors=Donor::all();

        return view('donatelist',[
            'donors'=>$donors,

        ]);
    }

    public function create(Request $request) {

    	$donor = new Donor();
    	$donor->name = request('name');
    	$donor->dob = request('dob');
    	$donor->address = request('address');
    	$donor->contact = request('contact');
        $donor->blood_group = request('blood_group');
        $donor->user_id = auth()->user()->id;
        
    	$donor->save();

        $currentDonor = Donor::latest()->first();
        $donorSelect = new DonorSelect();
        $donorSelect->hospital_id = request('hospital');
        $donorSelect->donor_uid_no = $currentDonor->uid_no;

        $donorSelect->save();

        $joinData = DB::table('transfers')
            ->join('acceptors', 'acceptors.uid_no', '=', 'transfers.acceptor_uid')
            ->select('transfers.*', 'acceptors.blood_group')
            ->where([
                ['transfers.donor_uid', '=', null],
                ['acceptors.blood_group', '=', $donor->blood_group],
                ])
            ->first();

        if($joinData){              //if there already is a row where match can be made in transfers table
            
            $currentTransferId = $joinData->transfer_id;
            $currentTransfer = Transfer::find($currentTransferId);
            $currentTransfer->donor_uid  = Donor::latest()->first()->uid_no;     //get the latest acceptor uid
            $currentTransfer->rbc = request('rbc');
            $currentTransfer->wbc = request('wbc');
            $currentTransfer->blood_report_no = request('blood_report_no');
            $currentTransfer->donor_hospital = $donorSelect->hospital_id;

            $currentTransfer->save();
        }else{                      //if no match is available in the current rows of transfers table
            
            $transfer = new Transfer();

            $transfer->acceptor_hospital = null;
            $transfer->acceptor_uid = null;

            $transfer->donor_uid  = Donor::latest()->first()->uid_no;     //get the latest acceptor uid
            $transfer->rbc = request('rbc');
            $transfer->wbc = request('wbc');
            $transfer->blood_report_no = request('blood_report_no');
            $transfer->donor_hospital = $donorSelect->hospital_id;


            $transfer->save();
        }

        $request->session()->flash('head', 'Success!');

        $request->session()->flash('message', 'Your blood donate request was saved!');

        return redirect()->back();
    }
}
