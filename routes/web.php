<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

Route::prefix('dealer/{slug}')->group(function ()
{
    Route::get('/',  [UserController::class, 'show'])->name('user.show');
});

Route::prefix('admin/')->middleware('auth')->group(function ()
{
    Route::get('create',  [UserController::class, 'create'])->name('user.create');
    Route::post('store',  [UserController::class, 'store'])->name('user.store');
    Route::get('index',  [UserController::class, 'index'])->name('user.index');
    Route::get('{slug}/delete',  [UserController::class, 'destroy'])->name('user.delete');
    Route::get('{slug}/restore',  [UserController::class, 'restore'])->name('user.restore');
});

Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('auth', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
