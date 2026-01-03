<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('accounts')->group(function () {
    Route::post('/', [AccountController::class, 'store']);
});

Route::prefix('users')->group(function () {
    Route::post('/', [UserController::class, 'store']);
});
