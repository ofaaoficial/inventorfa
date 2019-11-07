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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', function(){
    return redirect('products');
})->name('home');

Route::middleware(['auth'])->group(function(){
    Route::resource('products', 'ProductController')->except('show');
    Route::post('deductProduct/{id}', 'ProductController@deductProduct')->name('deduct');

    Route::get('users', 'UserController@index')->name('users.index');



    Route::middleware('isAdmin')->group(function(){
        Route::post('addProduct/{id}', 'ProductController@addProduct')->name('add');
        Route::get('history', 'HistoryController@index')->name('history.index');
        Route::get('history/{id}', 'HistoryController@show')->name('history.show');
    });
});

