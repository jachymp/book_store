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

// INDEX controller
Route::get('/', 'App\Http\Controllers\IndexController@index');

// ABOUT US controller
Route::get('/about-us', 'App\Http\Controllers\AboutController@aboutUs');

// FAQ controller
Route::get('/faq', 'App\Http\Controllers\FAQController@index')->middleware('auth');

// BOOK controller
Route::get('/books', 'App\Http\Controllers\BookController@index');
Route::get('/books/create', 'App\Http\Controllers\BookController@create');
Route::post('/books', 'App\Http\Controllers\BookController@store');
Route::get('/books/search', 'App\Http\Controllers\BookController@search');
Route::get('/books/{id}', 'App\Http\Controllers\BookController@show');
Route::get('/books/{id}/edit', 'App\Http\Controllers\BookController@edit');
Route::put('/books/{id}', 'App\Http\Controllers\BookController@update');
Route::delete('/books/{id}/delete', 'App\Http\Controllers\BookController@delete');
Route::post('/books/{id}/review', 'App\Http\Controllers\BookController@review');


// AUTHOR controller
Route::get('/authors', 'App\Http\Controllers\AuthorController@index');
Route::get('/authors/create', 'App\Http\Controllers\AuthorController@create');
Route::post('/authors', 'App\Http\Controllers\AuthorController@store');
Route::get('/authors/{id}', 'App\Http\Controllers\AuthorController@show');
Route::get('/authors/{id}/edit', 'App\Http\Controllers\AuthorController@edit');
Route::put('/authors/{id}', 'App\Http\Controllers\AuthorController@update');
Route::delete('/authors/{id}/delete', 'App\Http\Controllers\AuthorController@delete');

// CATEGORY controller
Route::get('/categories', 'App\Http\Controllers\CategoryController@index');
Route::get('/categories/{id}', 'App\Http\Controllers\CategoryController@show');
Route::delete('/categories/{id}/delete', 'App\Http\Controllers\CategoryController@delete');

// PUBLISHERS controller
Route::get('/publishers', 'App\Http\Controllers\PublisherController@index');
Route::get('/publishers/{id}', 'App\Http\Controllers\PublisherController@show');