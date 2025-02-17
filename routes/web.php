<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

// Route yang mengarah ke WelcomeController
Route::get('/greeting', [WelcomeController::class, 'greeting']);

// Route untuk halaman utama
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route dengan Controller untuk Home, About, dan Articles
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

// Route resource untuk photos
Route::resource('photos', PhotoController::class);

// Jika ingin menggunakan hanya beberapa aksi pada resource
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

// Atau mengecualikan beberapa aksi
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route lainnya
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/world', function () {
    return 'World';
});
Route::get('/about', function () {
    return 'NIM: 2341760066 - Nama: Nervalina Adzra Nora Aqilla';
});
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});
Route::get('/user/{name?}', function ($name = 'Valina') {
    return 'Nama saya ' . $name;
});
