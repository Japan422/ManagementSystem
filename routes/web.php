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

// haruto

Route::get('test','User\TopController@index');

Route::get('top_page','User\TopController@topPage')->name('user.TopPage');

Route::get('registration_page','User\TopController@registrationPage')->name('user.registrationPage');

Route::get('userregister_page','User\TopController@userregisterPage')->name('user.userregisterPage');

Route::get('userlogin_page','User\TopController@userLoginPage')->name('user.userloginPage');

// ryu

Route::prefix('example')->group(function () {
    Route::get('top_page','Example\User\TopController@topPage');

    Route::get('registration_page','Example\User\TopController@registrationPage');

    Route::get('userregister_page','Example\User\TopController@userRegisterPage');

    Route::get('userlogin_page','Example\User\TopController@userLoginPage');
});