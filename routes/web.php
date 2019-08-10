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

Route::get('/', function () {
    return view('auth/login');
});

// Route::Group(['middleware' => ['auth']], function() {

// 	Route::get('/home', 'UserController@user')->name('user');// user
// 	Route::resource('influencers', 'influencerController');

// 	Route::Group(['middleware' => ['admin']], function() {
// 		Route::get('/admin', 'UserController@admin')->name('admin'); // admin
// 		});
// });


Auth::routes();

Route::resource('campagnes', 'CampaignController');

Route::resource('analytics', 'AnalyticsController');

Route::get('/home', 'HomeController@index')->name('home');
