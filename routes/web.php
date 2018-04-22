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
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//USER - Créer  - Listes des ces specifications
Route::get('/specification', 'SpecificationsController@show')->name('show_specification');
Route::post('/specifications', 'SpecificationsController@create')->name('create_specification');
Route::get('/specifications', 'SpecificationsController@liste')->name('create_specification');


//ADMIN - Liste - Modifier - Delete
Route::middleware('isAdmin')->group(function (){
    Route::get('/liste_specifications', 'BackEnd\SpecificationsController@liste')->name('liste_specifications');
    Route::get('/specification/{id}', 'BackEnd\SpecificationsController@get')->name('backend_get_specification');
    Route::put('/specification/{id}', 'BackEnd\SpecificationsController@put')->name('backend_put_specification');
    Route::delete('/specification/{id}', 'BackEnd\SpecificationsController@delete')->name('backend_delete_specification');
});



