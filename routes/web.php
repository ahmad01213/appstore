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

Route::post('/loginadmin', 'Auth\LoginController@loginadmin')->name('loginadmin');
Route::get('logoutUser', 'AdminController@logoutAny')->name('logoutUser');
Route::prefix('admin')->middleware('admin')->group(function()
{
    Route::get('users','AdminController@users');
    Route::get('home','AdminController@main');
    Route::get('users/create','AdminController@createuser');
    Route::get('users/edit/{id}','AdminController@edituser');
    Route::post('users/update/{id}','AdminController@updateUser');
    Route::delete('users/delete/{id}','AdminController@destroyUser');
    Route::post('users/store','AdminController@storeUser');
    Route::get('apps','AdminController@apps');
    Route::get('apps/create','AdminController@createapp');
    Route::get('apps/edit/{id}','AdminController@editapp');
    Route::post('apps/store','AdminController@storeapp');
    Route::post('apps/update/{id}','AdminController@updateapp');
    Route::delete('apps/delete/{id}','AdminController@destroyapp');
    Route::get('apps/download/{id}','AdminController@downloadapp');
    Route::get('settings','AdminController@settings');
    Route::post('settingsupdate','AdminController@updateSettings');
    Route::get('messages','AdminController@messages');
    Route::delete('messages/delete/{id}','AdminController@destroyMessage');
});

Route::prefix('appdream')->middleware(['auth','owner'])->group(function()
{
    Route::get('login','FrontController@login');
    Route::get('home','FrontController@home');
    Route::get('appdetails/{id}','FrontController@appdetails');
    Route::get('aboutus','FrontController@aboutus');
    Route::get('contactus','FrontController@contactus');
    Route::get('search','FrontController@search');
    Route::post('messages','FrontController@messages');
});

Auth::routes();

Route::get('/', 'FrontController@home');
