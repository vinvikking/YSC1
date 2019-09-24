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

Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});

Route::Group(['middleware' => ['auth']], function() {

	Route::get('/home', 'UserController@user')->name('user');// user
	Route::resource('influencers', 'influencerController');

	Route::Group(['middleware' => ['admin']], function() {
		Route::get('/admin', 'UserController@admin')->name('admin'); // admin
		});
});



//Business routing
// Campaign
Route::get('campagnes/search', 'CampaignController@search')->name('campagnesS');
Route::resource('/campagnes', 'CampaignController');
//Influencer List
Route::get('influencers/search', 'InfluencerController@search')->name('influencersS');
Route::resource('/influencers', 'InfluencerController');
//User routes
Route::resource('/user', 'UserController');
//Analytics routing
Route::resource('analytics', 'AnalyticsController');
Route::resource('/subscription', 'SubscriptionController');
//Home routing
//Route::get('/home', 'HomeController@index')->name('home'); 

// Ingeschreven Campaigns
Route::resource('campaignsignup', 'CampaignSignupController');
// //Language routing
Route::get('locales/{lang}', 'Locale@index');

//Language routing
Route::get('home', 'HomeController@index')->name('home');
Route::get('lang/{locale}', 'HomeController@lang');


