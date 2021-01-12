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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'Ticket\TicketController@index')->name('ticket.index');
    Route::post('/confirm', 'Ticket\TicketController@confirm');
    Route::post('/complete', 'Ticket\TicketController@complete');
    Route::get('/history', 'Ticket\TicketController@history')->name('ticket.history');
    Route::get('/delete', 'Ticket\TicketController@delete');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {  
    Route::get('/index', 'Admin\UserController@index')->name('user.index');
    Route::get('/edit', 'Admin\UserController@edit');
    Route::post('/edit', 'Admin\UserController@update');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

