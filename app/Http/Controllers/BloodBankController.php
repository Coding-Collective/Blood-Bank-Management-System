<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\donor;
use App\acceptor;
use App\Hospital;
use App\User;

class BloodBankController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function donate() {
        $hospitals=Hospital::all();
    	return view('donate',[
            'hospitals'=>$hospitals,

        ]);
    }

    public function hospitals() {
        $hospitals=Hospital::all();
    	return view('hospitallist',[
            'hospitals'=>$hospitals,

        ]);
    }

    public function profile() {
        $users=auth()->user();
        $id = auth()->user()->id;
        $donors=Donor::where('user_id','=',$id )->get();
        // $acceptors=acceptor::where('name','=',$name )->get();
     return view('profile',[
        'donors'=>$donors,
        'users'=>$users,
     ]);


    }
    public function request() {
        $hospitals=Hospital::all();
    	return view('request',[
            'hospitals'=>$hospitals,

        ]);
    }

    public function types() {
        return view('types');
    }

    public function single() {
        return view('single');
    }

    public function index() {
        return view('welcome');
    }

    public function feedback() {
        return view('feedback');
    }

}
