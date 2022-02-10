<?php
declare(strict_types=1);

namespace App\Repository\Interface;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface ActiveApartmentRepositoryInterface
{
    public function confirmedRoom(string $key);

    public function invalidateRoom(string $key);

}
