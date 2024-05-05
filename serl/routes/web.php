<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\User\UserController;

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

// user 

Route::get('/users',[UserController::class,'index'])->name('admin.users.index');
Route::get('/users/create',[UserController::class,'create'])->name('admin.users.create');
Route::post('/users',[UserController::class,'store'])->name('admin.users.store');
Route::get('/users/{user}',[UserController::class,'show'])->name('admin.users.show');
Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('admin.users.edit');
Route::put('/users/{user}',[UserController::class,'update'])->name('admin.users.update');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('admin.users.destroy');

// delivery

Route::get('/admin/deliveries', [DeliveryController::class, 'index'])->name('admin.deliveries.index');
Route::get('/admin/deliveries/create', [DeliveryController::class, 'create'])->name('admin.deliveries.create');
Route::post('/admin/deliveries', [DeliveryController::class, 'store'])->name('admin.deliveries.store');
Route::get('/admin/deliveries/{delivery}', [DeliveryController::class, 'show'])->name('admin.deliveries.show');
Route::get('/admin/deliveries/{delivery}/edit', [DeliveryController::class, 'edit'])->name('admin.deliveries.edit');
Route::put('/admin/deliveries/{delivery}', [DeliveryController::class, 'update'])->name('admin.deliveries.update');
Route::delete('/admin/deliveries/{delivery}', [DeliveryController::class, 'destroy'])->name('admin.deliveries.destroy');