<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ActiviteController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


// Route::post('/activites/store', [ActiviteController::class, 'store']);
// Route::get('/activites', [ActiviteController::class, 'index']);
// Route::get('/activites/{id}', [ActiviteController::class, 'show']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // for authenticated users
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/refresh', [AuthController::class, 'refreshToken']);
    Route::apiResource('activites', ActiviteController::class);

    // for admins only and authenticated  
    //add middlewear check role 
    




    //add middlewear check role 
    // for parents only and authenticated 

    


    //add middlewear check role 
    // for animators only and authenticated  



});



