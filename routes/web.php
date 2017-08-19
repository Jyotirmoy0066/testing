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

Route::get('/admin','AdminController@index');

Route::get('/', function () {
    // return view('welcome', );
    return view('welcome', ['name' => 'Samantha']);
});

Route::get('home', 'AdminController@index');
Route::get('test', 'AdminController@test');
Route::post('login', 'AdminController@login');
Route::post('register', 'Auth\RegisterController@register');
// Route::get('register', 'Auth\RegisterController@index');
Route::get('register', function(){
		$title = "register";
		return view::make('auth.register')
		->with('title', $title);
	});

Route::get('add_user', 'AdminController@addUser');
Route::get('add_restaurant', 'AdminController@addRest');
Route::get('manage_restaurant', 'AdminController@manageRest');
Route::get('dashboard', 'AdminController@dashboard');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
