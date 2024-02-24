<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V2\TasksController;
use App\Http\Controllers\Api\V2\CompleteTaskController;

Route::middleware('auth:sanctum')->prefix('v2')->group(function() {
    Route::apiResource('/tasks', TasksController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});