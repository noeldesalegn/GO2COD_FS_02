<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::middleware(['auth'])->group(function(){
    Route::get('/account-dashboard',[UserController::class,'index'])->name('user.index');
});
Route::middleware(['auth',\App\Http\Middleware\AuthAdmin::class])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
