<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\FallbackController;
use App\Http\Middleware\AuthMiddleware;

Route::redirect('/', 'authenticate');
Route::fallback(FallbackController::class);

Route::get('/client', [AuthController::class, 'client'])->name('client.index');
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/authenticate', [AuthController::class, 'loginPage'])->name('auth.login');
Route::get('/signup', [AuthController::class, 'signupPage'])->name('auth.signup');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::middleware([AuthMiddleware::class])->group(function () {
    Route::prefix('Driver')->group(function () {
        Route::patch('confirm/{id}', [DriverController::class, 'confirmDelivery'])->name('confirm');
        Route::patch('accept/{id}', [DriverController::class, 'acceptDelivery'])->name('accept');
        Route::patch('cancel/{id}', [DriverController::class, 'cancelDelivery'])->name('cancel');
        Route::get('Dashboard', [DriverController::class, 'index'])->name('driver.index');
        Route::get('Deliveries', [DriverController::class, 'deliveryList'])->name('driver.deliverylist');
        Route::get('MyDeliveries', [DriverController::class, 'deliveries'])->name('driver.deliveries');
    });
});
