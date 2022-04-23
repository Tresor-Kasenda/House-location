<?php
declare(strict_types=1);

namespace App\Repository\Admins;

use App\Contracts\ApartmentRepositoryInterface;
use App\Models\House;
use App\Traits\ApartmentCrud;
use App\Traits\ImageUploader;
use App\Traits\RandomValues;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ApartmentRepository implements ApartmentRepositoryInterface
{
    use ImageUploader, RandomValues, ApartmentCrud;

    public function getContents(): Collection
    {
        return House::query()
            ->orderByDesc('created_at')
            ->get();
    }

    public function show(string $key): Model|Builder
    {
        $house = $this->getHouse($key);
        return $house->load('categories');
    }

    public function deleted(string $key): Model|Builder|int|null
    {
        $room = $this->getHouse(key: $key);
        if ($room->status){
            toast('Veillez désactiver votre appartement avant de le suspendre', 'warning');
            return null;
        }
        $room->delete();
        toast('L appartement a été suspéndue pour des raisons de sécurité', 'success');
        return $room;
    }

    private function getHouse(string $key): Builder|Model
    {
        return House::query()
            ->where('key', '=', $key)
            ->withCount('reservations')
            ->firstOrFail();
    }
}
