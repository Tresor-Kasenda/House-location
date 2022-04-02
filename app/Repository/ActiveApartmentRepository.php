<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\House;
use App\Enums\HouseEnum;
use App\Traits\ImageUploader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Contracts\ActiveApartmentRepositoryInterface;

class ActiveApartmentRepository implements ActiveApartmentRepositoryInterface
{
    use ImageUploader;

    public function confirmedRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('key', '=', $key)
            ->firstOrFail();
        $room->update([
            'status' => HouseEnum::CONFIRM
        ]);
        return $room;
    }

    public function invalidateRoom(string $key): Model|Builder
    {
        $room = House::query()
            ->where('key', '=', $key)
            ->firstOrFail();
        $room->update([
            'status' => HouseEnum::DRAFT
        ]);
        return $room;
    }

    public function restore(string $key): Model|Builder|House
    {
        $room = House::withTrashed()
            ->where('key', '=', $key)
            ->firstOrFail();
        $room->restore();
        toast('Appartement restaurer avec success', 'success');
        return $room;
    }

    public function forceDelete(string $key): Model|Builder
    {
        $room = House::query()
            ->where('key' , '=', $key)
            ->withTrashed()
            ->first();
        $this->removePathOfImages($room);
        $room->forceDelete();
        $room->categories()->detach();
        toast('L appartement a ete supprimer définitivement de la plate-forme', 'success');
        return $room;
    }
}
