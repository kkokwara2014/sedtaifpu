<?php

use Illuminate\Support\Facades\Mail;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

    Route::get('/','AdminController@index')->name('admin.index');

    // Handling all about the Admins
    Route::get('/all','AdminController@allAdmins')->name('admin.admins.all');
    Route::get('/create/new','AdminController@create')->name('admin.admins.create');
    Route::post('/create/new','AdminController@store')->name('admin.admins.store');
    Route::get('/edit/{id}','AdminController@edit')->name('admin.admins.edit');
    Route::match(['put', 'patch'],'update/{id}','AdminController@update')->name('admin.admins.update');

    

    Route::get('/contact/all','ContactController@index')->name('admin.contact.all');
    
    Route::get('/conf_committee/all','ConfcommitteeController@index')->name('admin.confcommittee.all');
    Route::get('/conf_committee/create','ConfcommitteeController@create')->name('admin.confcommittee.create');
    Route::post('/conf_committee/create','ConfcommitteeController@store')->name('admin.confcommittee.store');
});



// Auth::routes();
// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/','FrontendController@index')->name('homepage');
Route::get('about','FrontendController@about')->name('aboutus');
Route::get('faq','FrontendController@faq')->name('faq');





Route::group(['prefix'=>'conference'],function(){
    Route::get('/themes','ConferenceController@themes')->name('conf.themes');
    Route::get('/committee','ConferenceController@committee')->name('conf.committee');
    Route::get('/keyspeakers','ConferenceController@keyspeakers')->name('conf.keyspeakers');
    Route::get('/callforpaper','ConferenceController@callforpaper')->name('conf.callforpaper');
    Route::get('/location','ConferenceController@location')->name('conf.location');
    Route::get('/registration','ConfregController@create')->name('conf.registration');
    Route::post('/registration','ConfregController@store')->name('conf.registration.store');
    Route::get('/schedule','ConferenceController@schedule')->name('conf.schedule');
    Route::get('/paymentdetails','ConferenceController@paymentdetails')->name('conf.paymentdetails');
    
   
});
Route::group(['prefix'=>'download'],function(){
    Route::get('/abstract/template','DownloadController@abstracttemplate')->name('download.abstract');
    Route::get('/fullpaper/template','DownloadController@fullpapertemplate')->name('download.fullpaper');
   
});

Route::get('contact','ContactController@create')->name('contactus');
Route::post('contact','ContactController@store')->name('submit.contactus');


Route::get('submit/fullpaper','FullpapersubmissionController@showsubmissionpage')->name('show.submit.page');
Route::post('/submit/fullpaper','FullpapersubmissionController@submitpaper')->name('submit.paper');

Route::get('submit/asbtract','AbstractsubmissionController@showsubmissionpage')->name('show.submit.abstract.page');
Route::post('/submit/abstract','AbstractsubmissionController@submitabstract')->name('submit.abstract');

Route::get('/email', function(){
    Mail::send('email.contactus',['name'=>'KKOKWARA'], function($message){
        $message->to('kkokwara2014@gmail.com','KK')->subject('Welcome!');
    });
});