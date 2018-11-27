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


Route::group(['middleware' => 'web'],function(){
	// Register Routes
	Route::get('register', 'UserController@getRegister');
	Route::post('register', 'UserController@postRegister');
	//login routes
	Route::get('/', 'UserController@getLogin')->name('login');
	Route::post('login', 'UserController@postLogin');
	// Logout 
	Route::get('logout', 'UserController@logout')->name('logout');
	//forgot password
	Route::get('forgot', 'UserController@getForgotPassword');
	Route::post('forgot', 'UserController@postForgotPassword');
	Route::get('forgot-password-verification/{encryptedEmail}/{encryptedUserId}', 'UserController@resetPassword');
	Route::post('resetpassword', 'UserController@postResetPassword');
	/**
	 * Auth MiddleWare Group Routes
	 */
	Route::group(['middleware' => 'auth'], function() {
    	Route::get('welcome', ['uses' => 'BlogController@index']);
    });

    	/**
	 * Auth MiddleWare Group Routes
	 */
	Route::group(['middleware' =>'admin'], function() {
    	Route::get('welcome2', ['uses' => 'BlogController@index'])->name('welcome2');
    });
});

