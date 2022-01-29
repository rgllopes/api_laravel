<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ExpenditureController;
use App\Http\Controllers\API\AuthController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Users routes
Route::get('users', [UserController::class, 'index']);

// Expenditures routes
// Route::get('expenditures', [ExpenditureController::class, 'index']);
// Route::get('expenditures/{expenditure}', [ExpenditureController::class, 'show']);
// Route::post('expenditures', [ExpenditureController::class, 'store']);
// Route::put('expenditures/{expenditure}', [ExpenditureController::class, 'update']);
// Route::delete('expenditures/{expenditure}', [ExpenditureController::class, 'destroy']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('logout', [AuthController::class, 'logout']);

    Route::apiResource('expenditures', ExpenditureController::class);
});
