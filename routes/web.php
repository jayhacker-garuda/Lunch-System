<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StudentDashboardController;
use GuzzleHttp\Promise\Create;
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

// Auth
Route::get('/', [LoginController::class, 'lForm'])->name('auth.loginForm');
Route::post('/login', [LoginController::class, 'loginUser'])->name('auth.loginUser');
Route::get('/register', [RegisterController::class, 'rForm'])->name('auth.registerForm');
Route::post('/register', [RegisterController::class, 'registerUser'])->name('auth.registerUser');

// Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


// Student-Dashboard
Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard.index');
Route::post('/dashboard', [StudentDashboardController::class, 'storeOrder'])->name('dashboard.storeOrder');


// Admin-Dashboard
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Order Routes
Route::get('/orders', [OrderController::class, 'index'])->name('order.index');

// Create routes
Route::get('/create/category', [CreateController::class, 'category'])->name('create.category');
Route::post('/create/category', [CreateController::class, 'storeCategory'])->name('create.storeCategory');
Route::get('/create/meal-type', [CreateController::class, 'mealType'])->name('create.mealType');
Route::post('/create/meal-type', [CreateController::class, 'storeMealType'])->name('create.storeMeal');