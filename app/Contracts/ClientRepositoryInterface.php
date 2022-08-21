<?php

declare(strict_types=1);

namespace App\Contracts;

interface ClientRepositoryInterface
{
    public function getReservationForClients();

    public function showReservationForClient(int $key);
}
