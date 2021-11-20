<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('apartment', [\App\Http\Controllers\Admin\ApartmentApiController::class, 'index'])
    ->name('api.apartment.index');
