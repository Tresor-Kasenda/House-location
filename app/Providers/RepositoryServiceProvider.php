<?php

namespace App\Providers;

use App\Repository\ImageRepository;
use App\Repository\ApartmentRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\ImageRepositoryInterface;
use App\Contracts\ApartmentRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{

    protected array $repositories = [
        ImageRepositoryInterface::class => ImageRepository::class,
        ApartmentRepositoryInterface::class => ApartmentRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
