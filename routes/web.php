<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directionController;
use Illuminate\Http\Response;

Route::get('/', [directionController::class, 'index']);

Route::post('/', [directionController::class, 'post']);

/*
Route::post('/', function (Request $request) {
    return directionController::fn1($request);
});
*/