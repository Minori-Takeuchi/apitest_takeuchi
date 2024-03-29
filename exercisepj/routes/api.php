<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

Route::apiResource('/v1/exercise',ExerciseController::Class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
