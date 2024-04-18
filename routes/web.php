<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directionController;
use Illuminate\Http\Response;

Route::get('/', [directionController::class, 'index']);

Route::get('direction/?download={id}', 'directionController@handler')->name('download');


Route::post('direction/?download={id}', function (Request $request) {
    return 'hello world'; 
    //directionController::handler($request);
})->name('download');

