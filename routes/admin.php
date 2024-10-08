<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#test route

Route::get('/', function (Request $request) {
    //return response()->json(['message' => 'Hello World!']);
    return view('admin.index');
})->middleware('auth:sanctum');

#add middleware to auth
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');