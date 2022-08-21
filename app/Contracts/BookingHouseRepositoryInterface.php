<?php
declare(strict_types=1);

namespace App\Contracts;

interface BookingHouseRepositoryInterface
{
    public function stored($attributes);

    public function getReservation(string $key);
}
