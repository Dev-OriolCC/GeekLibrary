<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/', 'WelcomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
// View Book
Route::get('showBook/{book}', 'WelcomeController@showBook')->name('showBook');
// Download PDF
Route::get('makePDF', 'WelcomeController@makePDF')->name('makePDF');



Auth::routes();


Route::middleware('auth')->group(function(){
    Route::resource('books', 'BooksController');
    Route::resource('categories', 'CategoriesController');
    Route::get('trash', 'BooksController@trash')->name('trash');
    Route::put('restore/{book}', 'BooksController@restore')->name('restore');
});

