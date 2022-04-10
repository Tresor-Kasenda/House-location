<?php
declare(strict_types=1);

namespace App\Repository\Admins;

use App\Models\House;
use App\Enums\HouseEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Contracts\ActiveApartmentRepositoryInterface;

class ActiveApartmentRepository implements ActiveApartmentRepositoryInterface
{
    public function confirmedRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('key', '=', $key)
            ->firstOrFail();
        $room->update([
            'status' => HouseEnum::CONFIRMED
        ]);
        return $room;
    }

    public function invalidateRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('key', '=', $key)
            ->firstOrFail();
        $room->update([
            'status' => HouseEnum::PENDING
        ]);
        return $room;
    }
}
