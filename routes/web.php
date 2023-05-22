<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Post;
use App\Http\Controllers\Auth\AuthController;



Route::resource('/post','PostController');

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::post('/', [PostController::class, 'store']);
Route::get('/posts', [PostController::class, 'store']);

Route::get('/', [PostController::class, 'new_main']);

Route::get('/tyaritabi', [PostController::class, 'tyaritabi']);
Route::get('/tabimeshi', [PostController::class, 'tabimeshi']);
Route::get('/article_list', [PostController::class, 'article_list']);



Route::get('product', [ProductController::class,'index']);
Route::get('product/list', [ProductController::class,'list']);
Route::post('product/review', [ProductController::class,'review']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
