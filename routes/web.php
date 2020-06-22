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

//Route::group(['namespace' => 'auth'], function()
//{
//	Route::get('/login', 'LoginController@showLoginForm')->name('loginView');
//	Route::post('/login', 'LoginController@login')->name('login');
//
//	Route::get('/register', 'RegisterController@showRegisterForm')->name('registerView');
//	Route::post('/register', 'RegisterController@login')->name('register');
//
//	Route::get('/logout', 'LoginController@logout')->name('logout');
//});


// Authentication
Auth::routes();


//Route::middleware('auth')
//	->group(function()
//{

	// Home
	Route::get('/', 'ViewsController@getHome')->name('homeView');


	// Campaigns
	Route::get('/campaigns', 'ViewsController@getCampaigns')->name('campaignsView');
	Route::get('/get-campaigns', 'ViewsController@getCampaignsAjax');
	Route::get('/get-folders', 'ViewsController@getFoldersAjax');


	// Clients
	Route::get('/clients', 'ViewsController@getClients')->name('clientsView');
	Route::get('/get-books', 'ViewsController@getBooksAjax');

	// Profile
	Route::get('/profile', 'ViewsController@getProfile')->name('profileView');


	Route::group(['middleware' => 'admin'], function()
	{

		// Users
		Route::get('/users', 'ViewsController@getUsers')->name('usersView');
	});

	Route::get('/about', 'ViewsController@getAbout')->name('aboutView');
//});
