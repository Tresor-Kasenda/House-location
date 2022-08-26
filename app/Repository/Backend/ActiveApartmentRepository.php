<?php

declare(strict_types=1);

namespace App\Repository\Backend;

use App\Contracts\ActiveApartmentRepositoryInterface;
use App\Enums\HouseEnum;
use App\Jobs\ActivateApartmentJob;
use App\Models\House;
use App\Services\ToastService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ActiveApartmentRepository implements ActiveApartmentRepositoryInterface
{
    public function __construct(protected ToastService $service)
    {
    }

    public function confirmedRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('id', '=', $key)
            ->first();
        $room->update([
            'status' => HouseEnum::VALIDATED_HOUSE,
        ]);
        $this->service->success("Maison $room->id activer avec success");
        dispatch(new ActivateApartmentJob($room))->delay(now()->addSecond(14));

        return $room;
    }

    public function invalidateRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('id', '=', $key)
            ->first();
        $room->update([
            'status' => HouseEnum::PENDING_HOUSE,
        ]);

        $this->service->success("Maison $room->id desactiver avec success");

        return $room;
    }
}
