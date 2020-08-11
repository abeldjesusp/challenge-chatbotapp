<?php

use Illuminate\Support\Facades\Route;
use App\Apis\Currency;   

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

/* Route::get('/exchange', function () {
    $currency = new Currency();

    dd($currency->convertFromTo('USD', 'DOP', '1'));
}); */

// Auth
Auth::routes();

// Home
Route::get('/home', 'HomeController@index')->name('home');

// Accounts
Route::resource('accounts', 'AccountController');

// Transactions
Route::resource('transactions', 'TransactionController');
Route::get('accounts/transactions/{account}', 'TransactionController@accountTransactions')
     ->name('account-transactions');

// Currencies
Route::get('conversor', 'CurrencyController@index');
Route::post('conversor', 'CurrencyController@convert');


// Bot
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
