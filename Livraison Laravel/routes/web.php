<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('Home');
})->name('Home');

Route::get('/email', function () {
    return view('Contact');
});

Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

Route::post('/useeeer', [App\Http\Controllers\UserController::class, 'Useer'])->name('Useer');


Route::get('/orders', [OrderController::class, "index"]) ->name('orders.index');
Route::resource('orders', OrderController::class);
