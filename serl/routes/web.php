<?php

use App\Http\Controllers\User\UserController;
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
Route::get('/',function(){return view('welcome');});
Route::get('/users',[UserController::class,'index'])->name('admin.users.index');
Route::get('/users/create',[UserController::class,'create'])->name('admin.users.create');
Route::post('/users',[UserController::class,'store'])->name('admin.users.store');
Route::get('/users/{user}',[UserController::class,'show'])->name('admin.users.show');
Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('admin.users.edit');
Route::put('/users/{user}',[UserController::class,'update'])->name('admin.users.update');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('admin.users.destroy');