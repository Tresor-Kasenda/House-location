<?php

use App\Http\Controllers\Admin\ApartmentAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\ConfirmedApartmentController;
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
    Route::get('admin/apartment', [App\Http\Controllers\HomeController::class, 'index'])->name('backend.index');
    Route::resource('apartment', ApartmentAdminController::class);
    Route::resource('images', ImageAdminController::class);
    Route::resource('/admin/category', CategoryAdminController::class);

    Route::put('activeApartment/{key}', [ConfirmedApartmentController::class, 'active'])
        ->name('apartment.active');
    Route::put('invalidApartment/{key}', [ConfirmedApartmentController::class, 'inactive'])
        ->name('apartment.inactive');
    Route::get('trashedApartment', [ApartmentAdminController::class, 'trashed'])
        ->name('apartment.trashed');
    Route::put('trashedApartment/{apartment}', [ConfirmedApartmentController::class, 'reactivate'])
        ->name('apartment.restoreApartment');
    Route::delete('trashedApartment/{apartment}', [ConfirmedApartmentController::class, 'forceDelete'])
        ->name('apartment.forceDelete');
});
