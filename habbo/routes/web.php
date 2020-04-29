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

/**
 * Web user
 */

/**
 * Login
 */
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'Auth\LoginController@login');


/**
 * Register
 */
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

/**
 * Logout
 */
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/**
 * Home
 */
Route::get('/home', 'HomeController@index')->middleware('LoginStaff')->name('home');

/** 
 * Staff
 */
Route::get('/staff', 'Community\StaffController@index')->name('staff');

/**
 * News
 */
Route::get('/news', 'Community\NewsController@index')->name('news');
Route::get('/news/{slug}', 'Community\NewsController@show')->name('new');

/**
 * Top users
 */
Route::get('/top', 'Community\TopController@index')->name('top');

/**
 * Settings user
 */
Route::get('/settings/account', 'Auth\SettingsController@index')->name('settings');
Route::post('/settings/account', 'Auth\SettingsController@settings');

Route::get('/settings/account/password', 'Auth\SettingsController@password')->name('settings.password');
Route::post('/settings/account/password', 'Auth\SettingsController@updatePassword');

/**
 * Forgot password
 */
Route::middleware(['guest'])->prefix('password')->group(function() {
    Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/reset', 'Auth\ForgotPasswordController@reset')->name('password.update');

    Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    
    Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
});

/** 
 * Shop
 */
Route::middleware(['auth'])->prefix('shop')->group(function(){
    Route::get('/', 'Shop\ShopController@index')->name('shop');
    Route::post('/', 'Shop\ShopController@buy');

    Route::get('/pixel', 'Shop\PixelController@index')->name('pixel');
});

/**
 * Client
 */

Route::get('/client', 'ClientController@index')->middleware('auth')->name('client');
Route::get('/client/{id?}', 'ClientController@getClientbyRoom')->where(['id' => '[0-9]+'])->middleware('auth');

/** 
 * Require client
 */
Route::get('/api/getclientconfig', 'ClientApi@getClientConfig')->middleware('auth');
Route::get('/api/getclientdata', 'ClientApi@getClientData')->middleware('auth');
Route::get('/api/getssoticketweb', 'ClientApi@getSsoTicketWeb')->middleware('auth');

/**
 * About
 */
Route::prefix('about')->group(function(){
    Route::get('/', 'About\AboutController@index')->name('about');
    Route::get('/safety', 'About\AboutController@safety')->name('safety');
});

/**
 * Dashboard Staff
 */

 /**
  * Index
  */
Route::middleware(['auth', 'admin'])->prefix('housekeeping')->group(function () {
    Route::get('/', 'Dashboard\DashboardController@index')->name('admin.index');
});