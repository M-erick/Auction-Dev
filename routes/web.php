<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

// Route::view('/dashboard', 'frontPage')->name('dashboard');

Route::view('/SellShares', 'sellPanel')->name('sell');

//Route::view('/BuyShares', 'buyPanel');
Route::view('/HowTo', 'howTo')->name('howTo');

Route::resource('/BuyShares', FormController::class)->name('index','buy');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

