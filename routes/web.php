<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;

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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// auth routes
Route::get('user-login', [UserController::class, 'login'])->name('user.login');

// checkout routes
Route::get('checkout/create', [CheckoutController::class, 'create'])->name('checkout.create');
Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

require __DIR__.'/auth.php';
