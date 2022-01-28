<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ExpenditureController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Users routes
Route::get('users', [UserController::class, 'index']);

// Expenditures routes
Route::get('expenditures', [ExpenditureController::class, 'index']);
Route::post('expenditures', [ExpenditureController::class, 'store']);

