<?php

use App\Http\Controllers\Admin\ApartmentApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('apartment', [ApartmentApiController::class, 'index'])
    ->name('api.apartment.index');
