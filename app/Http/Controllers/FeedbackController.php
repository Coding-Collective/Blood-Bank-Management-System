<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;


class FeedbackController extends Controller
{

	public function save() {

    $feedback = new Feedback();
    	$feedback->name = request('name');
    	$feedback->email = request('email');
    	$feedback->rating = request('rating');
    	$feedback->suggestions = request('suggestions');
    	$feedback->input = request('input');
    	$feedback->recommend = request('recommend');
    	$feedback->message = request('message');

    	$feedback->save();

    	return redirect ('index');

    }
}
