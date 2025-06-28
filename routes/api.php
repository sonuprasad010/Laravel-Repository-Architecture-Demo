<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix("auth")->group(function () {
    Route::post("login",[AuthController::class, "login"]);
    Route::post("register",[AuthController::class, "register"]);
});

Route::prefix("blog")->group(function(){
    Route::post("create", [BlogController::class, "store"]);
    Route::post("/show/{blog}", [BlogController::class, "show"]);
    Route::delete("/delete/{blog}", [BlogController::class, "destroy"]);
});
