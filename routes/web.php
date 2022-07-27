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

Route::get('/checkout', function(){
    return view('checkout');
});
Route::get('/success', function(){
    return view('success');
})->name('stripe.success');
Route::get('/cancel', function(){
    return view('cancel');
})->name('stripe.cancel');

Route::post('/create-checkout-session',[\App\Http\Controllers\StripePaymentController::class, 'checkout']);
