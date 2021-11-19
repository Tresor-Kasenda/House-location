<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\House;
use App\Repository\Interface\ActiveApartmentRepositoryInterface;
use App\Services\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ActiveApartmentRepository implements ActiveApartmentRepositoryInterface
{
    use ImageUploader;

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

    public function restore(string $key)
    {
        $room = House::withTrashed()
            ->where('key', '=', $key)
            ->restore();
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
