<?php
declare(strict_types=1);

use App\Http\Controllers\Admins\ApartmentAdminController;
use App\Http\Controllers\Admins\CategoryAdminController;
use App\Http\Controllers\Admins\ConfirmedApartmentController;
use App\Http\Controllers\Admins\DetailApartmentAdminController;
use App\Http\Controllers\Admins\HomeAdminController;
use App\Http\Controllers\Admins\ImagesAdminController;
use App\Http\Controllers\Admins\ReservationAdminController;
use App\Http\Controllers\Admins\TrashedAdminController;
use App\Http\Controllers\Admins\UsersAdminController;
use App\Http\Controllers\Apps\AboutController;
use App\Http\Controllers\Apps\CategoryController;
use App\Http\Controllers\Apps\ContactController;
use App\Http\Controllers\Apps\HomeController;
use App\Http\Controllers\Apps\LocationController;
use App\Http\Controllers\Apps\NewsLetterController;
use App\Http\Controllers\Apps\ReservationController;
use App\Http\Controllers\Apps\SearchLocationController;
use App\Http\Controllers\Commissioners\ApartmentCommissionerController;
use App\Http\Controllers\Commissioners\HomeCommissionerController;
use App\Http\Controllers\Commissioners\DetailApartmentCommissionerController;
use App\Http\Controllers\Commissioners\ImageCommissionerController;
use App\Http\Controllers\Users\CancellingUserController;
use App\Http\Controllers\Users\HomeUserController;
use App\Http\Controllers\Users\UpdateUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseNoteController;

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
Route::post('news-letters', [NewsLetterController::class, 'index'])->name('newsletters.send');
Route::controller(ReservationController::class)->group(function (){
    Route::post('reservation', 'store')->name('reservation.store');
    Route::get('confirmation/{key}', 'show')->name('reservation.show');
});

Route::get('search', [SearchLocationController::class, 'searching'])->name('search.house');



Route::get("/notes", [HouseNoteController::class, "index"])->name("notes.index"); //retourne les 10 maisons les mieux notées
Route::get('/notes/create/{id}', [HouseNoteController::class, 'create'])->name('housenote.create');
Route::post('/notes/create', [HouseNoteController::class, 'store'])->name('housenote.store');
Route::get('/notes/delete/{id}', [HouseNoteController::class, 'destroy'])->name('housenote.delete')->middleware(['users', 'auth']);
// Route::group([
//     'prefix' => 'note',
//     'as' => 'note.',
//     'middleware' => ['auth']
// ], function(){
//     Route::resource('notes', HouseNoteController::class)->except(['update']);
// });