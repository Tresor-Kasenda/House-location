<?php
declare(strict_types=1);

namespace App\Repository\Interface;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface ActiveApartmentRepositoryInterface
{
    /**
     * @param string $key
     * @return Model|Builder
     */
    public function confirmedRoom(string $key): Model|Builder;

    /**
     * @param string $key
     * @return Model|Builder
     */
    public function invalidateRoom(string $key): Model|Builder;
}
