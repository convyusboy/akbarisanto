<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getHome');
Route::get('home', 'HomeController@getHome');

Route::get('login', 'HomeController@getLogin');
Route::post('login', 'HomeController@postLogin');
Route::get('logout', 'HomeController@getLogout');

Route::controller('work', 'WorkController');
Route::controller('story', 'StoryController');
Route::controller('gallery', 'GalleryController');
Route::controller('about', 'AboutController');
Route::controller('contact', 'ContactController');

Route::controller('admin/work', 'AdminWorkController');
Route::controller('admin/story', 'AdminStoryController');
Route::controller('admin/gallery', 'AdminGalleryController');
Route::controller('admin', 'AdminController');
