<?php

use App\Http\Controllers\Admin\Apartment\ApartmentAdminController;
use App\Http\Controllers\Admin\ImageAdminController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LocationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class)->names(['index' => 'home.index']);
Route::resource('categories', CategoryController::class);
Route::resource('abouts', AboutController::class);
Route::resource('localisation', LocationController::class);

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/admin/apartment', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::resource('apartment', ApartmentAdminController::class);
    Route::resource('images', ImageAdminController::class);
});
