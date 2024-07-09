<?php
// File: routes/api.php

use Illuminate\Http\Request;
use App\Http\Controllers\Extract;

Route::apiResource('users', 'UserController');
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);