<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MixComercialController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(MixComercialController::class)->group(function (){
    Route::get('/mixComercials','index');
    Route::post('/mixComercial','store');
    Route::get('/mixComercial/{id}','show');
    Route::put('/mixComercial/{id}','update');
    Route::delete('/mixComercial/{id}','destroy');
});