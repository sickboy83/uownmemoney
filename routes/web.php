<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'Controller@index');
    Route::get('/expenses/{id}', 'Controller@expenses');
    Route::get('/deleteExpense/{id}', 'Controller@deleteExpense');
    Route::get('/deleteAllExpenses', 'Controller@deleteAllExpenses');
    Route::get('/total', 'Controller@total');
    Route::post('/addExpense', 'Controller@addExpense');
    Route::get('/log', 'Controller@addLog');
});
