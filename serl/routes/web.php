<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\DeliveryController;
use App\Http\Controllers\Payments\PaymentController;

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
Route::get('/',function(){return view('welcome');});
Route::get('/admin',[AdminController::class,'Reporting'])->name('admin');


// user 

Route::get('/admin/users',[UserController::class,'index'])
->name('admin.users.index');
Route::get('/admin/users/create',[UserController::class,'create'])
->name('admin.users.create');
Route::post('/admin/users',[UserController::class,'store'])
->name('admin.users.store');
Route::get('/admin/users/{user}',[UserController::class,'show'])
->name('admin.users.show');
Route::get('/admin/users/{user}/edit',[UserController::class,'edit'])
->name('admin.users.edit');
Route::put('/admin/users/{user}',[UserController::class,'update'])
->name('admin.users.update');
Route::delete('/admin/users/{user}',[UserController::class,'destroy'])
->name('admin.users.destroy');

// delivery

Route::get('/admin/deliveries', [DeliveryController::class, 'index'])
->name('admin.deliveries.index');
Route::get('/admin/deliveries/create', [DeliveryController::class, 'create'])
->name('admin.deliveries.create');
Route::post('/admin/deliveries', [DeliveryController::class, 'store'])
->name('admin.deliveries.store');
Route::get('/admin/deliveries/{delivery}', [DeliveryController::class, 'show'])
->name('admin.deliveries.show');
Route::get('/admin/deliveries/{delivery}/edit', [DeliveryController::class, 'edit'])
->name('admin.deliveries.edit');
Route::put('/admin/deliveries/{delivery}', [DeliveryController::class, 'update'])
->name('admin.deliveries.update');
Route::delete('/admin/deliveries/{delivery}', [DeliveryController::class, 'destroy'])
->name('admin.deliveries.destroy');


// Vehicles
Route::get('/admin/vehicles',[VehicleController::class,"index"])
->name('admin.vehicles.index');
Route::get('/admin/vehicles/create',[VehicleController::class,"create"])
->name('admin.vehicles.create');
Route::post('/admin/vehicles',[VehicleController::class,"store"])
->name('admin.vehicles.store');
Route::get('/admin/vehicles/{vehicle}',[VehicleController::class,"show"])
->name('admin.vehicles.show');
Route::get('/admin/vehicles/{vehicle}/edit',[VehicleController::class,"edit"])
->name('admin.vehicles.edit');
Route::put('/admin/vehicles/{vehicle}',[VehicleController::class,"update"])
->name('admin.vehicles.update');
Route::delete('/admin/vehicles/{vehicle}',[VehicleController::class,"destroy"])
->name('admin.vehicles.destroy');

// order
Route::get('admin/orders',[OrderController::class,'ShowOrders'])->name("ShowOrders");
Route::get('/order', [OrderController::class, 'showForm'])->name('order.form');
Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');

// Payment  with Stripe
Route::get('/payment',[StripeController::class,'index'])
->name('payment.index');
Route::post('/payment/checkout',[StripeController::class,'checkout'])
->name('payment.stripe.checkout');
Route::get('/payment/success',[StripeController::class,'success'])
->name('payment.stripe.success');

// Payment  with Paypal
Route::get('/payment/paypal',function(){
  return view('payment.paypal');
})
->name('payment.paypal.index');

Route::post('/payment/paypal',[PaypalController::class,'payment'])
->name('payment.paypal');
Route::get('/payment/paypal/success',[PaypalController::class,'success'])
->name('payment.paypal.success');
Route::get('/payment/paypal/cancel',[PaypalController::class,'cancel'])
->name('payment.paypal.cancel');

// Payment  with Card


Route::get('/admin/payments', [PaymentController::class, 'index'])->name('admin.payments.index');

Route::get('/payments/create', [PaymentController::class, 'create'])->name('payments.create');
Route::post('/payments/process/{order}', [PaymentController::class, 'processPayment'])->name('payments.process');
Route::get('/client/home/{order}', [ClientController::class, 'index'])->name('client.index');