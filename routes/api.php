<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['token'])->group(function () {
    Route::apiResource('blogs', BlogController::class);
    Route::apiResource('blogs.posts', PostController::class);
    
    Route::post('blogs/{blog}/posts/{post}/like', [LikeController::class, 'like']);
    Route::delete('blogs/{blog}/posts/{post}/like', [LikeController::class, 'unlike']);
    Route::post('blogs/{blog}/posts/{post}/comments', [CommentController::class, 'store']);
    Route::delete('blogs/{blog}/posts/{post}/comments/{comment}', [CommentController::class, 'destroy']);
});
