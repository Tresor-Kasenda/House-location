<?php

use App\Http\Controllers\Admin\ApartmentAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\ConfirmedApartmentController;
use App\Http\Controllers\Admin\ImageAdminController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LocationController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home.index');

Route::resource('categories', CategoryController::class);
Route::get('abouts', AboutController::class)->name('abouts.index');
Route::get('localisation', LocationController::class)->name('localisation.index');
Route::get('appartement', [SearchController::class, 'searchHouse'])->name('search.location');
Route::get('search-location', [SearchController::class, 'searchLocation'])->name('location.search');

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('admin/apartment', [App\Http\Controllers\HomeController::class, 'index'])->name('backend.index');
    Route::resource('apartment', ApartmentAdminController::class);
    Route::resource('images', ImageAdminController::class);
    Route::resource('/admin/category', CategoryAdminController::class);

    Route::controller(ConfirmedApartmentController::class)->group(function (){
        Route::put('trashedApartment/{apartment}', 'reactivate')
            ->name('apartment.restoreApartment');
        Route::delete('trashedApartment/{apartment}', 'forceDelete')
            ->name('apartment.forceDelete');
        Route::put('activeApartment/{key}','active')
            ->name('apartment.active');
        Route::put('invalidApartment/{key}', 'inactive')
            ->name('apartment.inactive');
    });

    Route::get('trashedApartment', [ApartmentAdminController::class, 'trashed'])
        ->name('apartment.trashed');
});
