<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\VehicleController;
use App\Http\Middleware\DriverMiddleware;

// Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::redirect('/', 'authenticate');
Route::fallback(FallbackController::class);

Route::prefix('Client')->group(function(){
    Route::get('Dashboard', [ClientController::class, 'index'])->name('client.index');
    Route::get('MyOrders', [ClientController::class, 'orders'])->name('client.orders');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/authenticate', [AuthController::class, 'loginPage'])->name('auth.login')->middleware('login');
Route::get('/signup', [AuthController::class, 'signupPage'])->name('auth.signup');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/signup', [AuthController::class, 'signup']);

Route::middleware([DriverMiddleware::class])->group(function () {
    Route::prefix('Driver')->group(function () {
        Route::patch('report/{id}', [VehicleController::class, 'reportVehicle'])->name('report');
        Route::get('Vehicles',[VehicleController::class,'index'])->name('driver.vehicles');
        Route::patch('dropoff/{id}', [DriverController::class, 'dropoffDelivery'])->name('dropoff');
        Route::patch('accept/{id}', [DriverController::class, 'acceptDelivery'])->name('accept');
        Route::patch('cancel/{id}', [DriverController::class, 'cancelDelivery'])->name('cancel');
        Route::patch('pickup/{id}', [DriverController::class, 'pickupDelivery'])->name('pickup');
        Route::get('Dashboard', [DriverController::class, 'index'])->name('driver.index');
        Route::get('Deliveries', [DriverController::class, 'deliveryList'])->name('driver.deliverylist');
        Route::get('MyDeliveries', [DriverController::class, 'deliveries'])->name('driver.deliveries');
    });
});
