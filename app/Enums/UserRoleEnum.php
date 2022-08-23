<?php

declare(strict_types=1);

namespace App\Enums;

enum UserRoleEnum: int
{
    const USERS_ROLE = 1;
    const DEALER_ROLE = 2;
    const ADMINS_ROLE = 3;
}
