<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IdsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth.basic')->group(function (): void {
    Route::any('generate', [IdsController::class, 'generate']);
    Route::any('retrieve/{id}', [IdsController::class, 'retrieve']);
});
