<?php
declare(strict_types=1);

namespace App\Enums;

enum HouseEnum: int
{
    const VALIDATED_HOUSE = 1;
    const PENDING_HOUSE = 0;
    const INVALIDATED_HOUSE = 0;
}
