<?php

declare(strict_types=1);

namespace App\Contracts;

interface ActiveApartmentRepositoryInterface
{
    public function confirmedRoom(string $key);

    public function invalidateRoom(string $key);
}
