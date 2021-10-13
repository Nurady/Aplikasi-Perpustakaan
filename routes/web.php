<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'Frontend\BookController@index')->name('homepage');
Route::get('/book/{book}/detail', 'Frontend\BookController@show')->name('book.show');
Route::post('/book/{book}/borrow', 'Frontend\BookController@borrow')->name('book.borrow')->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function () {
    //     return view('welcome');
    // });

// Route::get('/user', function () {
    //     return view('user');
    // });

// Route::get('/', function () {
//     return view('pages.frontend.home');
// });