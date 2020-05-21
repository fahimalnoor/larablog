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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/profile', 'HomeController@profile')->name('profile');

//creating post
Route::get('/home/newpost', 'PostController@newpost')->name('newpost');
Route::post('/home/createpost', 'PostController@createPost')->name('createpost');

//loading all posts
Route::get('/home/allposts', 'PostController@allPosts')->name('allposts');

//loading myposts
Route::get('/home/myposts/{email}', 'PostController@myPosts');

//deleting my own post
Route::get('/home/myposts/delete/{id}', 'PostController@myPostDelete');

//deleting my own post
Route::get('/home/profile/delete/{email}', 'HomeController@delete');

