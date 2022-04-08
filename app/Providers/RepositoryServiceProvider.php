<?php

namespace App\Providers;

use App\Contracts\CategoryRepositoryInterface;
use App\Contracts\HomeRepositoryInterface;
use App\Contracts\NewsLetterRepositoryInterface;
use App\Contracts\ReservationRepositoryInterface;
use App\Contracts\UserRepositoryInterface;
use App\Repository\Admins\ApartmentRepository;
use App\Repository\Admins\CategoryRepository;
use App\Repository\Admins\ReservationRepository;
use App\Repository\Admins\UserRepository;
use App\Repository\Apps\HomeFrontendRepository;
use App\Repository\Apps\NewsLetterRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\ApartmentRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    protected array $repositories = [
        CategoryRepositoryInterface::class => CategoryRepository::class,
        UserRepositoryInterface::class => UserRepository::class,
        ReservationRepositoryInterface::class => ReservationRepository::class,
        ApartmentRepositoryInterface::class => ApartmentRepository::class,
        HomeRepositoryInterface::class => HomeFrontendRepository::class,
        NewsLetterRepositoryInterface::class => NewsLetterRepository::class
    ];

    public function register(){}

    public function boot()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
