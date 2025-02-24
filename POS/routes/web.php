<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Home
Route::get('/', [HomeController::class, 'index']);

// Products (Dengan Prefix "/category")
Route::prefix('/category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// User Profile (Dengan Parameter ID dan Nama)
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// POS Transaction
Route::get('/sales', [SalesController::class, 'index']);
?>