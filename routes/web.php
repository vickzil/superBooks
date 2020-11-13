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

// HomePage
Route::get('/', 'BooksController@index');

// Books Route
Route::post('/books/create', 'BooksController@submit');
Route::post('/books/search', 'BooksController@search');
Route::get('/books/archive', 'BooksController@archived_books');
Route::get('/books/{id}/restore', 'BooksController@restore');
Route::get('/books/{id}/soft_delete', 'BooksController@soft_delete');
Route::resource('books', 'BooksController');

// User Profile Route
Route::resource('profile', 'UsersController');
Route::get('/profile/edit', 'UsersController@edit');
Route::resource('users', 'UsersController');
// Auth Route
Auth::routes();



