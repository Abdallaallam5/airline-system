<?php

use App\Http\Controllers\AirCraftController;
use App\Http\Controllers\FlightMasterController;
use App\Http\Controllers\FlightTransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassengerController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource("/passenger",PassengerController::class);
Route::resource("/flightmaster",FlightMasterController::class);
Route::resource("/aircraft",AirCraftController::class);
Route::resource("/flighttransaction",FlightTransactionController::class);