<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directionController;
use Illuminate\Http\Response;

Route::get('/', [directionController::class, 'index']);

Route::post('/direction', function (Request $request) {
    return directionController::post($request);
});
