<?php
declare(strict_types=1);

namespace App\Enums;

enum UserRoleEnum: int
{
    const USERS = 1;
    const COMMISSIONNERS = 2;
    const ADMINS = 3;
}