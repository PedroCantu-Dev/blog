<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

#test route
// Route::get('/', function (Request $request) {
//     return response()->json(['message' => 'Hello World!']);
// });

Route::get('/', [HomeController::class, 'index'])->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


