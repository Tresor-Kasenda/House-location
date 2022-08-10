<?php

declare(strict_types=1);

namespace App\Contracts;

interface CategoryHomeRepositoryInterface
{
    public function index();

    public function getHouseCategories();

    public function show(string $key);

    public function getHouseByDetails($house);
}
