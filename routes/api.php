<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('accounts')->group(function () {
    Route::get('/{account}', [AccountController::class, 'show']);
    Route::post('/', [AccountController::class, 'store']);
});

Route::prefix('users')->group(function () {
    Route::get('/{user}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
});
