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
// Route::resource('documents', 'DocumentController');
Route::resource('practica3/contacts', 'ContactsController');
Route::get('buscar',function(){
    return view('contacts.buscar');
});

Auth::routes();
Route::post('/buscar','ContactsController@buscarId');
Route::get('/home', 'HomeController@index')->name('home');


