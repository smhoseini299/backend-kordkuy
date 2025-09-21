<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public routes
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/comments', [CommentController::class, 'getPostComments']);
Route::post('/comments', [CommentController::class, 'store']);

// Admin routes (in a real app, you'd use proper authentication)
Route::prefix('admin')->group(function () {
    // Posts management
    Route::get('/posts', [PostController::class, 'index']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);
    
    // Comments management
    Route::get('/comments', [CommentController::class, 'index']);
    Route::put('/comments/{comment}/status', [CommentController::class, 'updateStatus']);
    Route::post('/comments/{comment}/approve', [CommentController::class, 'approve']);
    Route::post('/comments/{comment}/reject', [CommentController::class, 'reject']);
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
