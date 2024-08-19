<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthAPIController;
use App\Http\Controllers\API\ArticleAPIController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('article', ArticleAPIController::class)->middleware('auth:sanctum');

Route::get('/auth/create', [AuthAPIController::class, 'create']);
Route::post('/auth/signUp', [AuthAPIController::class, 'signUp']);
Route::get('/auth/login', [AuthAPIController::class, 'login'])->name('login');
Route::post('/auth/signIn', [AuthAPIController::class, 'customLogin']);
Route::get('/auth/logout', [AuthAPIController::class, 'logout']);