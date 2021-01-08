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
    return view('home');
});

Route::view('/home','home');

Route::view('/about','about');

Route::view('/services','services');

Route::view('/contact','contact');


Route::view('/wh','wh');

Route::view('/homecaresol','homecaresol');





Route::view('/crgjob','crgjob');

Route::view('/form_recipient','form_recipient');

Route::view('/form_applicant','form_applicant');

Auth::routes();


Route::post('/form_recipient','RecipientController@insertDB');


Route::post('/form_applicant','ApplicantController@insertDB');

//
//Route::get('/showq','RecipientController@match');








//Route::get('/home', 'HomeController@index')->name('home');





