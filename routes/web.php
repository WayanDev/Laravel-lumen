<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/books', 'BooksController@index');
Route::get('/books/{id:[\d]+}', [
    'as' => 'books.show',
    'uses' => 'BooksController@show'
]);
Route::post('/books', 'BooksController@store');
Route::put('/books/{id:[\d]+}', 'BooksController@update');
Route::delete('/books/{id:[\d]+}', 'BooksController@destroy');

Route::group(['prefix' => 'authors'],function() {
    Route::get('/', 'AuthorsController@index');
    Route::get('/{id:[\d]+}', [
        'as' => 'authors.show',
        'uses' => 'AuthorsController@show'
    ]);
    Route::post('/', 'AuthorsController@store');
    Route::put('/{id:[\d]+}', 'AuthorsController@update');
    Route::delete('/{id:[\d]+}', 'AuthorsController@destroy');
});


Route::group(['prefix' => 'api'], function () {
    Route::get('/peminjaman', 'PeminjamanController@index');
    Route::get('/peminjaman/{id}', 'PeminjamanController@show');
    Route::post('/peminjaman', 'PeminjamanController@store');
    Route::put('/peminjaman/{id}', 'PeminjamanController@update');
    Route::delete('/peminjaman/{id}', 'PeminjamanController@destroy');
});
