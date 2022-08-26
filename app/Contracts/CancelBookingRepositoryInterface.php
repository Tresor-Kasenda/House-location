<?php

declare(strict_types=1);

namespace App\Contracts;

interface CancelBookingRepositoryInterface
{
    public function cancelReservation(string $key);
}
