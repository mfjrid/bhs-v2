<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/progress', [RequestController::class, 'progress'])->name('progress');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile-update');
    Route::get('/requests', [RequestController::class, 'requests'])->name('requests');
    Route::get('/add', [RequestController::class, 'add'])->name('add-request');
    Route::post('/add', [RequestController::class, 'store'])->name('store-request');
    Route::post('/delete', [RequestController::class, 'destroy'])->name('destroy-request');
});
