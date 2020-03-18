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
Route::group(['prefix'=>'home'],function(){
	Route::get('/','FrontendController@gethome');
});


Route::group(['namespace'=>'Auth','middleware'=>'CheckLogedIn'],function(){
	Route::get('login','LoginController@getLogin');
	Route::post('login','LoginController@postLogin');

	Route::get('registration','RegisterController@getRegistration');
	Route::post('registration','RegisterController@postRegistration');
});


Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
		Route::get('home','HomeController@gethome');
	});
	Route::get('logout','HomeController@getLogout');

});
