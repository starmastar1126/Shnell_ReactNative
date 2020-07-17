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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::post('/', 'HomeController@indexPost')->name('index');

Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/users/create/', 'HomeController@users_create')->name('users_create');
Route::post('/users/create/', 'HomeController@users_create_post')->name('users_create');


Route::get('/projects/', 'DashController@projectsShow')->name('projects');
Route::post('/projects/', 'DashController@projectsPost')->name('projects');

Route::get('/project/edit/{id}', 'DashController@ProjectEditShow')->name('projectsEdit');
Route::post('/project/edit', 'DashController@ProjectEditPost')->name('projectsEdit');



Route::get('firebase','FirebaseController@index');
