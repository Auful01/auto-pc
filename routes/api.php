<?php

use App\Http\Controllers\LogsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('logs')->group(function () {
    Route::get('/', [LogsController::class, 'index']);
    Route::post('/', [LogsController::class, 'store']);
});
