<?php

Route::get('/', 'HomeController@index')->name('admin');

Route::get('/author/data', 'DataController@authors')->name('author.data');
Route::get('/book/data', 'DataController@books')->name('book.data');
Route::resource('author', 'AuthorController');
Route::resource('book', 'BookController');

Route::get('/borrow', 'BorrowController@index')->name('borrow.index');
Route::put('/borrow/{borrowHistory}/return', 'BorrowController@returnBook')->name('borrow.return');
Route::get('/borrow/data', 'DataController@borrows')->name('borrow.data');

Route::get('/report', 'ReportController@topBook')->name('report');
Route::get('/report/user', 'ReportController@topUser')->name('report.user');


// Route::get('/', function () {
    //     return view('layouts.master');
    // })->name('admin');

// Route::get('/author', 'AuthorController@index')->name('author.index');
// Route::get('/author/create', 'AuthorController@create')->name('author.create');
// Route::post('/author/store', 'AuthorController@store')->name('author.store');
// Route::get('/author/{author}/edit', 'AuthorController@edit')->name('author.edit');
// Route::put('/author/{author}', 'AuthorController@update')->name('author.update');
// Route::delete('/author/{author}', 'AuthorController@destroy')->name('author.destroy');