<?php

use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\EscapeRoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/escape-rooms' , [EscapeRoomController::class,'index']);
Route::get('/escape-rooms/{id}' , [EscapeRoomController::class,'show']);
Route::get('/escape-rooms/{id}/timeslots' , [EscapeRoomController::class,'getTimeSlots']);
Route::post('/booking' , [BookingController::class,'store']);
Route::get('/booking' , [BookingController::class,'index']);
Route::delete('/booking/{id}' , [BookingController::class,'destroy']);
