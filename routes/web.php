<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/email',function(){
    return new NewUserWelcome();
});

Route::get('/donatelist', 'DonateController@index');

Route::get('/index', 'BloodBankController@index');

Route::post('/index', 'RequestController@store');

Route::post('/create-feedback', 'FeedbackController@save');

Route::get('/feedback', 'BloodBankController@feedback');

Route::get('/types', 'BloodBankController@types');

Route::get('/hosptitallist', 'BloodBankController@hospitals');
Route::get('/profile', 'BloodBankController@profile');

Route::post('/', 'DonateController@create');

Route::get('/donate', 'BloodBankController@donate');

Route::get('/request', 'BloodBankController@request');

Route::get('/single', 'BloodBankController@single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
