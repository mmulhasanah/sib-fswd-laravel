<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('landing');
});

// product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// User
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Role
Route::get('/role', [RoleController::class, 'index'])->name('role.index');
