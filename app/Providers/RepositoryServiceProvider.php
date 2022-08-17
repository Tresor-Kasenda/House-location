<?php
declare(strict_types=1);

namespace App\Providers;

use App\Contracts\ActiveApartmentRepositoryInterface;
use App\Contracts\ApartmentCommissionerRepositoryInterface;
use App\Contracts\CancellingUserRepositoryInterface;
use App\Contracts\CategoryHomeRepositoryInterface;
use App\Contracts\CategoryRepositoryInterface;
use App\Contracts\HomeCommissionerRepositoryInterface;
use App\Contracts\HomeRepositoryInterface;
use App\Contracts\DetailsHouseCommissionerRepositoryInterface;
use App\Contracts\ImageCommissionerRepositoryInterface;
use App\Contracts\ImageRepositoryInterface;
use App\Contracts\NewsLetterRepositoryInterface;
use App\Contracts\ReservationHouseRepositoryInterface;
use App\Contracts\ReservationRepositoryInterface;
use App\Contracts\ReservationUserRepositoryInterface;
use App\Contracts\SearchRepositoryInterface;
use App\Contracts\SlideRepositoryInterface;
use App\Contracts\TrashedRepositoryInterface;
use App\Contracts\UpdateUserRepositoryInterface;
use App\Contracts\UserRepositoryInterface;
use App\Contracts\UsersProfileRepositoryInterface;
use App\Repository\Backend\ActiveApartmentRepository;
use App\Repository\Backend\ApartmentRepository;
use App\Repository\Backend\CategoryRepository;
use App\Repository\Backend\ImageRepository;
use App\Repository\Backend\ReservationRepository;
use App\Repository\Backend\SlideRepository;
use App\Repository\Backend\TrashedRepository;
use App\Repository\Backend\UserRepository;
use App\Repository\Frontend\HomeFrontendRepository;
use App\Repository\Frontend\NewsLetterRepository;
use App\Repository\Frontend\SearchRepository;
use App\Repository\Dealer\ApartmentCommissionerRepository;
use App\Repository\Dealer\DetailHouseCommissionerRepository;
use App\Repository\Dealer\HomeCommissionerRepository;
use App\Repository\Dealer\ImageCommissionerRepository;
use App\Repository\Users\CancellingUserRepository;
use App\Repository\Users\ReservationUserRepository;
use App\Repository\Users\UsersProfileRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\ApartmentRepositoryInterface;
use App\Repository\Frontend\CategoryRepository as HomeCategory;
use App\Repository\Frontend\ReservationRepository as Reservation;

class RepositoryServiceProvider extends ServiceProvider
{
    protected array $repositories = [
        CategoryRepositoryInterface::class => CategoryRepository::class,
        UserRepositoryInterface::class => UserRepository::class,
        ReservationRepositoryInterface::class => ReservationRepository::class,
        ApartmentRepositoryInterface::class => ApartmentRepository::class,
        HomeRepositoryInterface::class => HomeFrontendRepository::class,
        NewsLetterRepositoryInterface::class => NewsLetterRepository::class,
        ActiveApartmentRepositoryInterface::class => ActiveApartmentRepository::class,
        TrashedRepositoryInterface::class => TrashedRepository::class,
        CategoryHomeRepositoryInterface::class => HomeCategory::class,
        ReservationHouseRepositoryInterface::class => Reservation::class,
        ImageRepositoryInterface::class => ImageRepository::class,
        HomeCommissionerRepositoryInterface::class => HomeCommissionerRepository::class,
        ApartmentCommissionerRepositoryInterface::class => ApartmentCommissionerRepository::class,
        ImageCommissionerRepositoryInterface::class => ImageCommissionerRepository::class,
        UpdateUserRepositoryInterface::class => UsersProfileRepository::class,
        SearchRepositoryInterface::class => SearchRepository::class,
        ReservationUserRepositoryInterface::class => ReservationUserRepository::class,
        CancellingUserRepositoryInterface::class => CancellingUserRepository::class,
        SlideRepositoryInterface::class => SlideRepository::class
    ];

    public function register(){}

    public function boot()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
