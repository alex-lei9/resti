<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Public Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);


Route::middleware('auth:sanctum')->group(function () {
    //Auth Routes
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::get('/getAllRoles',[RoleController::class,'index']); 

    // Route::apiResource('users', UserController::class);
    Route::get('user', [UserController::class, 'index']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/{id}', [UserController::class, 'show']);
    Route::put('user/{id}', [UserController::class, 'update']);
    Route::delete('user/{id}', [UserController::class, 'destroy']);

    Route::post('location', [LocationController::class, 'createLocation']);
    Route::get('location', [LocationController::class, 'getLocations']);
    Route::get('location/{id}', [LocationController::class, 'getLocation']);
    Route::put('location/{id}', [LocationController::class, 'updateLocation']);
    Route::delete('location/{id}', [LocationController::class, 'deleteLocation']);

    Route::post('restaurant', [RestaurantController::class, 'createRestaurant']);
    Route::get('restaurant', [RestaurantController::class, 'getRestaurants']);
    Route::get('restaurant/{id}', [RestaurantController::class, 'getRestaurant']);
    Route::put('restaurant/{id}', [RestaurantController::class, 'updateRestaurant']);
    Route::delete('restaurant/{id}', [RestaurantController::class, 'deleteRestaurant']);

    Route::post('restaurant', [RoleController::class, 'createRole']);
    Route::get('restaurant', [RoleController::class, 'getRole']);
    Route::get('restaurant/{id}', [RoleController::class, 'getRole']);
    Route::put('restaurant/{id}', [RoleController::class, 'updateRole']);
    Route::delete('restaurant/{id}', [RoleController::class, 'deleteRole']);
});
