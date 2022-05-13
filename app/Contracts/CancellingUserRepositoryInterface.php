<?php
declare(strict_types=1);

namespace App\Contracts;

interface CancellingUserRepositoryInterface
{
    public function cancelReservation(string $key);
}
