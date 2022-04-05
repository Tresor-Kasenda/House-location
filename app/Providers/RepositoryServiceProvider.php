<?php

namespace App\Providers;

use App\Contracts\CategoryRepositoryInterface;
use App\Contracts\ReservationRepositoryInterface;
use App\Contracts\UserRepositoryInterface;
use App\Repository\Admins\ApartmentRepository;
use App\Repository\Admins\CategoryRepository;
use App\Repository\Admins\ImageRepository;
use App\Repository\Admins\ReservationRepository;
use App\Repository\Admins\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\ImageRepositoryInterface;
use App\Contracts\ApartmentRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    protected array $repositories = [
        ImageRepositoryInterface::class => ImageRepository::class,
        CategoryRepositoryInterface::class => CategoryRepository::class,
        UserRepositoryInterface::class => UserRepository::class,
        ReservationRepositoryInterface::class => ReservationRepository::class,
        ApartmentRepositoryInterface::class => ApartmentRepository::class
    ];

    public function register(){}

    public function boot()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
