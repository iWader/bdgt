<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'LedgerController@index');

    Route::get('dashboard', 'LedgerController@index');

    Route::resource('accounts', 'AccountController');

    Route::resource('transactions', 'TransactionController');

    Route::resource('categories', 'CategoryController');

    Route::resource('bills', 'BillController');

    Route::resource('goals', 'GoalController');

    Route::get('/calculators/debt', 'CalculatorController@debt');
});
