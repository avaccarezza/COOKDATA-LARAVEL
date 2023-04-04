<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AppMobileController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
 });
 
Route::post('/login', [AppMobileController::class,'login']);
Route::post('/signup', [AppMobileController::class,'signup']);