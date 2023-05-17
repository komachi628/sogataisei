<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Models\Post;




Route::resource('/post','PostController');

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::post('/', [PostController::class, 'store']);
Route::get('/posts', [PostController::class, 'store']);

Route::get('/', [PostController::class, 'index']);

Route::get('/tyaritabi', [PostController::class, 'tyaritabi']);
Route::get('/tabimeshi', [PostController::class, 'tabimeshi']);
Route::get('/article_list', [PostController::class, 'article_list']);

Route::get('/welcome', function () {
    return view('welcome');
});
