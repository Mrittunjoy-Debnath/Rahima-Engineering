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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/service', 'HomeController@service')->name('service');
Route::get('/work', 'HomeController@work')->name('work');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/news-classic', 'HomeController@newsClassic')->name('news-classic');
Route::get('/news-details/{id}', 'HomeController@newsDetails')->name('news-details');

Route::get('/userlogin', 'HomeController@userLogin')->name('user.login');
Route::get('/userregister', 'HomeController@userRegister')->name('user.register');
Route::get('/socialshare','SocialShareController@index')->name('social-share');
Route::group(['middleware' =>'auth'],function(){

});

//admin
Route::group(['as'=>'admin.','prefix'=>'admin','middleware' =>'is_admin'],function(){
    Route::get('/home', 'HomeController@adminIndex')->name('home');
    Route::resource('category','Admin\CategoryController');
    Route::resource('news','Admin\NewsController');
    Route::resource('services','Admin\ServiceController');
    Route::resource('images','Admin\ImageController');
    Route::resource('teams','Admin\TeamController');
    Route::resource('products','Admin\ProductController');
});
