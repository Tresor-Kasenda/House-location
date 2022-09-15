<?php

use App\Http\Controllers\Api\ApartmentApiController;
use App\Http\Controllers\Api\HomeApiController;
use Illuminate\Support\Facades\Route;

Route::get('apartment', [ApartmentApiController::class, 'index'])
    ->name('api.apartment.index');

Route::get('homedata', [HomeApiController::class, 'home']);
