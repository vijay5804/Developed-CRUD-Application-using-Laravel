<?php

use Illuminate\Http\Request;



use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ProductController::class,'index']);
Route::post("/products/create", [ProductController::class,'create']);
Route::post("/products/store", [ProductController::class,'store']);
Route::get("/products/show/{id}", [ProductController::class,'show']); 
Route::get("/products/edit/{id}", [ProductController::class,'edit']); 
Route::put("/products/update/{id}", [ProductController::class,'update']);
Route::get("/products/delete/{id}", [ProductController::class,'destroy']); 
