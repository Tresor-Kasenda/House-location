<?php
declare(strict_types=1);

namespace App\Contracts;

interface BookingUserRepositoryInterface
{
    public function getReservations();
}
