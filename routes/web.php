<?php

use App\HTTP\Controllers\CartController;
use App\HTTP\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/cart',[\App\Http\Controllers\CartController::class,'index'])->name('cart.index');
Route::post('/cart/store',[CartController::class,'addToCart'])->name('cart.store');

Route::get('/details', function ()
{
   return view('details');
});

Route::get('/shop', function ()
{
    return view('shop');
});

Route::get('/', function () {
    return view('welcome');
});

