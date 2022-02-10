<?php

use App\Http\Controllers\Api\ApartmentApiController;
use Illuminate\Support\Facades\Route;

Route::get('apartment', [ApartmentApiController::class, 'index'])
    ->name('api.apartment.index');
