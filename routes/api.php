<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
    Route::prefix('posts')->group(function() {
        Route::get('/', [PostController::class, 'index']);
        Route::post('/', [PostController::class, 'store']);
        Route::post('/{id}', [PostController::class, 'update']);
        Route::delete('/{id}', [PostController::class, 'delete']);
    });
});
