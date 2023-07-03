<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServicesController;

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
Route::get('/home',"HomeController@home")->name('home');

Route::get('/about',[AboutController::class,'index']);
// Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/shop',[ShopController::class,'index'])->name('shop');
Route::get('/contact',[ContactController::class,'show'])->name('contact');
Route::get('/services',[ServicesController::class,'index'])->name('services');
