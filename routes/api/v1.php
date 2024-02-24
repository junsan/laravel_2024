<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TasksController;
use App\Http\Controllers\Api\V1\CompleteTaskController;

Route::prefix('v1')->group(function() {
    Route::apiResource('/tasks', TasksController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});