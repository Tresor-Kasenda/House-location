<?php
declare(strict_types=1);

use App\Http\Controllers\Backend\ApartmentAdminController;
use App\Http\Controllers\Backend\CancelReservationController;
use App\Http\Controllers\Backend\CategoryAdminController;
use App\Http\Controllers\Backend\ConfirmedApartmentController;
use App\Http\Controllers\Backend\ConfirmReservationController;
use App\Http\Controllers\Backend\DetailApartmentAdminController;
use App\Http\Controllers\Backend\HomeAdminController;
use App\Http\Controllers\Backend\ImagesAdminController;
use App\Http\Controllers\Backend\ReservationAdminController;
use App\Http\Controllers\Backend\SlideAdminController;
use App\Http\Controllers\Backend\TrashedAdminController;
use App\Http\Controllers\Backend\UsersAdminController;
use App\Http\Controllers\Dealer\ApartmentCommissionerController;
use App\Http\Controllers\Dealer\DetailApartmentCommissionerController;
use App\Http\Controllers\Dealer\HomeCommissionerController;
use App\Http\Controllers\Dealer\ImageCommissionerController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\HouseController;
use App\Http\Controllers\Frontend\LocationController;
use App\Http\Controllers\Frontend\NewsLetterController;
use App\Http\Controllers\Frontend\ReservationController;
use App\Http\Controllers\Frontend\SearchLocationController;
use App\Http\Controllers\Users\CancellingUserController;
use App\Http\Controllers\Users\HomeUserController;
use App\Http\Controllers\Users\UpdateUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group([
    'prefix' => 'admins',
    'as' => 'admins.',
    'middleware' => ['admins', 'auth']
], function(){
    Route::resource('backend', HomeAdminController::class)->except(['show', 'create', 'store', 'update', 'edit', 'destroy']);
    Route::resource('houses', ApartmentAdminController::class);
    Route::resource('categories', CategoryAdminController::class);
    Route::resource('users', UsersAdminController::class)->except(['create', 'store', 'update', 'edit']);
    Route::resource('reservations', ReservationAdminController::class)->except(['create', 'store', 'update', 'edit']);
    Route::resource('image', ImagesAdminController::class);
    Route::resource('details', DetailApartmentAdminController::class);
    Route::resource('trashedApartments', TrashedAdminController::class)->except(['show', 'create', 'store', 'update', 'edit', 'destroy']);
    Route::controller(TrashedAdminController::class)->group(function (){
        Route::put('trashedApartments/{key}', 'restore')->name('trashed.restore');
        Route::delete('trashedApartments/{key}', 'delete')->name('trashed.delete');
    });

    Route::resource('slides', SlideAdminController::class);

    Route::put('activeReservation/{key}', [ConfirmReservationController::class, 'confirm'])->name('reservation.active');
    Route::put('cancelReservation/{key}', [CancelReservationController::class, 'inactive'])->name('reservation.inactive');

    Route::controller(ConfirmedApartmentController::class)->group(function (){
        Route::put('activeApartment/{key}','active')
            ->name('apartment.active');
        Route::put('invalidApartment/{key}', 'inactive')
            ->name('apartment.inactive');
    });
});

Route::group([
    'prefix' => 'commissioner',
    'as' => 'commissioner.',
    'middleware' => ['commissioner', 'auth']
], function(){
    Route::resource('backend', HomeCommissionerController::class);
    Route::resource('houses', ApartmentCommissionerController::class);
    Route::resource('imageHouses', ImageCommissionerController::class);
    Route::resource('details', DetailApartmentCommissionerController::class);
});

Route::group([
    'prefix' => 'users',
    'as' => 'users.',
    'middleware' => ['users', 'auth']
], function(){
    Route::resource('users', HomeUserController::class);
    Route::controller(UpdateUserController::class)->group(function (){
        Route::put('updateUser/{key}/update', 'update')->name('update.users');
    });
    Route::delete('cancel/{key}', [CancellingUserController::class, 'cancel'])->name('reservation.cancel');
});

Route::get('/', HomeController::class)->name('home.index');

Route::resource('categories', CategoryController::class);
Route::get('abouts', AboutController::class)->name('abouts.index');
Route::get('localisation', LocationController::class)->name('location.index');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('search', [SearchLocationController::class, 'searching'])->name('search.house');
Route::get('maisons', HouseController::class)->name('house.index');
Route::get('/maisons/{key}', [HouseController::class, 'show'])->name('house.show');
Route::post('news-letters', [NewsLetterController::class, 'index'])->name('newsletters.send');
Route::controller(ReservationController::class)->group(function (){
    Route::post('reservation', 'store')->name('reservation.store');
    Route::get('confirmation/{key}', 'show')->name('reservation.show');
});


Route::get('welcome/{locale}', function ($locale) {
    App::setLocale($locale);
});
