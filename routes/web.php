<?php

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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

    Route::get('/','AdminController@index')->name('admin.index');
    // Route::get('/editor/all','EditorialController@index')->name('admin.editor.all');
    // Route::get('/create/editor','EditorialController@create')->name('admin.create.editor');
    // Route::get('/save/editor','EditorialController@store')->name('admin.store.editor');

    // Route::get('/contact/all','ContactController@index')->name('admin.contact.all');


    // Route::get('/conference/all','ConferenceController@index')->name('admin.conference.all');


    // Route::get('/submitted_paper/all','PaperController@index')->name('admin.submittedpaper.all');
});


Route::get('/','FrontendController@index')->name('homepage');
Route::get('about','FrontendController@about')->name('aboutus');
Route::get('faq','FrontendController@faq')->name('faq');
Route::get('contact','ContactController@contact')->name('contactus');

Route::group(['prefix'=>'conference'],function(){
    Route::get('/themes','ConferenceController@themes')->name('conf.themes');
    Route::get('/committee','ConferenceController@committee')->name('conf.committee');
    Route::get('/keyspeakers','ConferenceController@keyspeakers')->name('conf.keyspeakers');
    Route::get('/callforpaper','ConferenceController@callforpaper')->name('conf.callforpaper');
    Route::get('/location','ConferenceController@location')->name('conf.location');
    Route::get('/registration','ConferenceController@registration')->name('conf.registration');
    Route::get('/schedule','ConferenceController@schedule')->name('conf.schedule');
    Route::get('/paymentdetails','ConferenceController@paymentdetails')->name('conf.paymentdetails');
});

Route::group(['prefix'=>'download'],function(){
    Route::get('/abstract/template','DownloadController@abstracttemplate')->name('download.abstract');
    Route::get('/fullpaper/template','DownloadController@fullpapertemplate')->name('download.fullpaper');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
