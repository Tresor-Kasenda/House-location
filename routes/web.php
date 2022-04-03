<?php

use App\Http\Controllers\Admin\ApartmentAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\ConfirmedApartmentController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\ImageAdminController;
use App\Http\Controllers\Apps\AboutController;
use App\Http\Controllers\Apps\CategoryController;
use App\Http\Controllers\Apps\HomeController;
use App\Http\Controllers\Apps\LocationController;
use App\Http\Controllers\Apps\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group([
    'prefix' => 'admins',
    'as' => 'admins.',
    'middleware' => ['admins', 'auth']
], function(){
    Route::resource('backend', HomeAdminController::class);
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

Route::group([
    'prefix' => 'commissioner',
    'as' => 'commissioner.',
    'middleware' => ['commissioner', 'auth']
], function(){
    Route::resource('backend', HomeAdminController::class);

});

Route::group([
    'prefix' => 'users',
    'as' => 'users.',
    'middleware' => ['users', 'auth']
], function(){
    Route::resource('backend', HomeAdminController::class);
});


Route::get('/', HomeController::class)->name('home.index');

Route::resource('categories', CategoryController::class);
Route::get('abouts', AboutController::class)->name('abouts.index');
Route::get('localisation', LocationController::class)->name('localisation.index');
Route::get('apartment', [SearchController::class, 'searchHouse'])->name('search.location');
Route::get('search-location', [SearchController::class, 'searchLocation'])->name('location.search');
