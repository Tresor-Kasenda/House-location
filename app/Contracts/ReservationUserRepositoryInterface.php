<?php
declare(strict_types=1);

namespace App\Contracts;

interface ReservationUserRepositoryInterface
{
    public function getReservations();
}
