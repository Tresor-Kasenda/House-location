<?php
declare(strict_types=1);

namespace App\Contracts;

interface ReservationHouseRepositoryInterface
{
    public function stored($attributes);
}
