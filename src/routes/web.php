<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;

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

Route::get('/', [ContactController::class, 'index']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/thanks',[ContactController::class,'thanks']);
Route::get('/input', [ContactController::class, 'index']);

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login']); 
Route::get('/register', [UserController::class, 'index']); 
Route::post('/register', [UserController::class, 'store']); 

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
});