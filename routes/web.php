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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books/{id}/delete', 'BookController@destroy');
Route::get('/books/cheapest','BookController@longest');
Route::get('/books/longest','BookController@cheapest');
Route::get('/books/search','BookController@search');

Route::resource('books','BookController');
Route::resource('loans','LoanController');
Route::resource('authors','AuthorController');

Auth::routes();


