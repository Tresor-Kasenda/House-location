<?php

declare(strict_types=1);

namespace App\Enums;

enum ReservationEnum
{
    const PENDING_RESERVATION = false;

    const CONFIRMED_RESERVATION = true;

    const INVALIDATED_RESERVATION = false;
}
