<?php
declare(strict_types=1);

namespace App\Repository\Admins;

use App\Contracts\ApartmentRepositoryInterface;
use App\Models\House;
use App\Traits\ImageUploader;
use App\Traits\RandomValues;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ApartmentRepository implements ApartmentRepositoryInterface
{
    use ImageUploader, RandomValues;

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

    public function created($attributes): Builder|Model
    {
        $apartment = House::query()
            ->create([
                'prices' => $attributes->prices,
                'address'=> $attributes->address,
                'guarantees'=> $attributes->guarantees,
                'phoneNumber'=> $attributes->phoneNumber,
                'email'=> $attributes->email,
                'latitude'=> $attributes->latitude,
                'longitude'=> $attributes->longitude,
                'images'=> $this::uploadFiles($attributes),
                'commune'=> $attributes->commune,
                'district'=> $attributes->district,
                'roomNumber'=> $attributes->roomNumber,
                'town' => $attributes->town,
                'user_id' => auth()->id(),
                'reference' => $this->generateRandomTransaction(15)
            ]);
        $apartment->categories()->attach($attributes->categories);
        toast("Un nouveau appartement à été ajouter", 'success');
        return $apartment;
    }

    public function updated(string $key, $attributes): Model|Builder
    {
        $house = $this->getHouse(key: $key);
        $house->categories()->detach($attributes->categories);
        $house->update([
            'prices' => $attributes->prices,
            'address'=> $attributes->address,
            'guarantees'=> $attributes->guarantees,
            'phoneNumber'=> $attributes->phoneNumber,
            'email'=> $attributes->email,
            'latitude'=> $attributes->latitude,
            'longitude'=> $attributes->longitude,
            'commune'=> $attributes->commune,
            'district'=> $attributes->district,
            'images'=> $this::uploadFiles($attributes),
            'roomNumber'=> $attributes->roomNumber,
            'town' => $attributes->town,
        ]);
        $house->categories()->attach($attributes->categories);
        toast("Un nouveau appartement à été modifier", 'success');
        return $house;
    }

    public function deleted(string $key): Model|Builder|int|null
    {
        $room = $this->getHouse(key: $key);
        if ($room->status == true){
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
