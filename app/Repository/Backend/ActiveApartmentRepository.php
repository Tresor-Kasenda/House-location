<?php
declare(strict_types=1);

namespace App\Repository\Backend;

use App\Jobs\ActivateApartmentJob;
use App\Models\House;
use App\Enums\HouseEnum;
use App\Notifications\ActivateApartmentNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Contracts\ActiveApartmentRepositoryInterface;
use Illuminate\Support\Facades\Notification;

class ActiveApartmentRepository implements ActiveApartmentRepositoryInterface
{
    public function confirmedRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('id', '=', $key)
            ->first();
        $room->update([
            'status' => HouseEnum::VALIDATED_HOUSE
        ]);
        dispatch(new ActivateApartmentJob($room))->delay(now()->addSecond(14));
        return $room;
    }

    public function invalidateRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('id', '=', $key)
            ->first();
        $room->update([
            'status' => HouseEnum::PENDING_HOUSE
        ]);
        return $room;
    }
}
