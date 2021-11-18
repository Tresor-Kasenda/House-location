<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\House;
use App\Repository\Interface\ActiveApartmentRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ActiveApartmentRepository implements ActiveApartmentRepositoryInterface
{
    public function confirmedRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('key', '=', $key)
            ->firstOrFail();
        $room->update([
            'status' => House::APARTMENT_CONFIRMED
        ]);
        return $room;
    }

    public function invalidateRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('key', '=', $key)
            ->firstOrFail();
        $room->update([
            'status' => House::APARTMENT_UNCONFIRMED
        ]);
        return $room;
    }
}
