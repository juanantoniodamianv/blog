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

/*
	GET, POST, PUT, DELTE, RESOURCE
*/
Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix' => 'articles'], function(){
// 	Route::get('view/{id}',[
// 		'uses'	=>	'TestController@view',
// 		'as'	=>	'articlesView'
// 	]);
// });

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	// Users
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
		'uses'		=>		'UsersController@destroy',
		'as'		=>		'admin.users.destroy'
	]);
	Route::get('users/{id}/edit', [
		'uses'		=>		'UsersController@edit',
		'as'		=>		'admin.users.edit'
	]);

	// Categories
	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/edit', [
		'uses'		=>		'CategoriesController@edit',
		'as'		=>		'admin.categories.edit'
	]);
	Route::get('categories/{id}/destroy', [
		'uses'		=> 'CategoriesController@destroy',
		'as'		=>	'admin.categories.destroy'
	]);

	// Tags
	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
		'uses'		=> 'TagsController@destroy',
		'as'		=>	'admin.tags.destroy'
	]);

	//Articles
	Route::resource('articles', 'ArticlesController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
