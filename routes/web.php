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

use App\Mail\NewUserWelcomeMail;
use App\User;

Auth::routes();

Route::get('/email', function() {
	return new NewUserWelcomeMail();
});

Route::get('/index', 'PostsController@index');

Route::get('/search', 'PostsController@search')->name('search');



Route::post('follow/{user}', 'FollowsController@store');



Route::get('/', 'PostsController@index');
Route::get('/post/create', 'PostsController@create');

Route::post('/post', 'PostsController@store');

Route::get('/post/{post}', 'PostsController@show');
Route::get('/post/{id}/edit', ['uses' => 'PostsController@editPost', 'as' => 'posts.editPost']);
Route::put('/post/{id}', ['uses' => 'PostsController@update', 'as' => 'posts.update']);

Route::get('/delete/{id}', 'PostsController@delete');

Route::get('/profile/delete/{id}', 'ProfilesController@delete');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

// comments
Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('/comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('/comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('/comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);


Route::get('/deleteComment/{id}', 'CommentsController@delete');
Route::resource('tags', 'TagController', ['except' => ['create']]);