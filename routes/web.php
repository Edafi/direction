<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directionController;
use Illuminate\Http\Response;

//Route::get('/', [directionController::class, 'index']);
/*
Route::get('/', function () {
    $users = [
        ['userid' => 1, 'name' => 'Alex'],
        ['userid' => 2, 'name' => 'Jane'],
    ];
    return download()->json($users);
});
*/

Route::get('/', [directionController::class, 'index']);

Route::get('/direction/{id}', function($id){
    return "Id.$id";
});