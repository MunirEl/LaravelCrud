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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('book', 'BookController');

/*Route::resource('user', 'App\User');
*/
//Route::get('/compra', 'Book\compra');

Route::get('compra', function () {
    return view('compra');
    //return "Este libro {$book_id} pertenece al usuario {$user_id}";
});