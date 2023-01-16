<?php

use Illuminate\Support\Facades\Route;
use App\Models\Location;

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


//admin side creating location
Route::resource('location', 'App\Http\Controllers\LocationController');
Route::post('location/store', 'App\Http\Controllers\LocationController@store');
//admin side creating model
Route::resource('model', 'App\Http\Controllers\ModelController');
Route::post('model/store', 'App\Http\Controllers\ModelController@store');

Route::get('admin','App\Http\Controllers\AdimController@index');
Route::get('approve/{id}','App\Http\Controllers\AdimController@approve');

Route::get('adminlogin','App\Http\Controllers\AdminLoginController@index');
Route::get('adminlogin/post','App\Http\Controllers\AdminLoginController@login');
//addpost
Route::get('post-add', 'App\Http\Controllers\ToaddController@get_post');
Route::post('toadd/store', 'App\Http\Controllers\ToaddController@store');


//ajax calling
Route::get('get-location', 'App\Http\Controllers\ToaddController@get_location');
Route::get('get-model', 'App\Http\Controllers\ToaddController@get_model');

Route::resource('user', 'App\Http\Controllers\UserController');
Route::post('user/store', 'App\Http\Controllers\UserController@store');

Route::get('login', 'App\Http\Controllers\LoginController@index');
Route::post('login-post', 'App\Http\Controllers\LoginController@login');

Route::get('front', 'App\Http\Controllers\FrontController@index');
Route::get('/', 'App\Http\Controllers\FrontController@get_add');
Route::get('inner_page/{id}','App\Http\Controllers\FrontController@inner_page');

Route::get('search_index','App\Http\Controllers\FrontController@search_index');
Route::get('category','App\Http\Controllers\FrontController@category');

Route::get('iphone','App\Http\Controllers\FrontController@iphone');
Route::get('mac','App\Http\Controllers\FrontController@mac');
Route::get('watches','App\Http\Controllers\FrontController@watches');
Route::get('airpod','App\Http\Controllers\FrontController@airpod');
Route::get('tv','App\Http\Controllers\FrontController@tv');
Route::get('accessories','App\Http\Controllers\FrontController@accessories');

Route::get('myaccount','App\Http\Controllers\MyAccountController@index');
Route::get('pr','App\Http\Controllers\MyAccountController@pr');

Route::get('pr/pi','App\Http\Controllers\MyAccountController@pi');
Route::get('addetails/{id}','App\Http\Controllers\MyAccountController@myad');
Route::get('edit_page/{id}','App\Http\Controllers\MyAccountController@edit_page');
Route::post('store_edit','App\Http\Controllers\MyAccountController@store_edit');

Route::get('sold/{id}','App\Http\Controllers\MyAccountController@sold');
Route::get('delete/{id}','App\Http\Controllers\MyAccountController@delete');













