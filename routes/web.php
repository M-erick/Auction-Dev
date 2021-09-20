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

Route::view('/dashboard', 'frontPage');

Route::view('/SellShares', 'sellPanel');

Route::view('/BuyShares', 'buyPanel');
Route::view('/HowTo', 'howTo')->name('howTo');



Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

