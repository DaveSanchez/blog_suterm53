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

Route::get('/', 'PostController@index')->name('home');

Route::get('/contacto',function(){
    return view('contacto');
})->name('contacto');

Route::post('/contacto/send_message', 'ContactoController@sendMessage')->name('contacto.message');

Route::get('/post/{id}','PostController@showpublic')->name('post.show.public');

Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/post/create','AdminController@post_create')->name('post.create');
Route::post('/admin/post/store','AdminController@post_store')->name('post.store');
Route::get('/admin/post/list','AdminController@post_list')->name('post.list');
Route::get('/admin/user/list','AdminController@user_list')->name('user.list')->middleware('denytostandard');

Route::get('/admin/messages','MessagesController@index')->name('messages')->middleware('denytostandard');
Route::get('/admin/messages/show/{id}','MessagesController@show')->name('messages.show')->middleware('denytostandard');

Route::get('/admin/birthday/list','BirthDayController@list')->name('birthday.list');
Route::get('/admin/birthday/create','BirthDayController@create')->name('birthday.create');
Route::post('/admin/birthday/store','BirthDayController@store')->name('birthday.store');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
