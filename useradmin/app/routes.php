2
3
	
<?php
 
Route::resource('/user', 'UserController');
Route::controller('/', 'HomeController');
Route::get('login', function()
{
	return View::make('auth.login');
});
Route::get('signup', function()
{
	return View::make('auth.signup');
});

// Authentication Routes
Route::get('login', 'AuthController@loginPage');
Route::post('login', 'AuthController@login');
Route::get('signup', 'AuthController@signupPage');
Route::post('signup', 'AuthController@signup');
Route::get('logout', 'AuthController@logout');

// Course Routes
Route::get('posts/search', ['as' => 'posts.search', 'uses' => 'PostController@search']);
Route::resource('posts', 'PostController');
