<?php
declare(strict_types=1);

namespace App\Traits;

use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait ApartmentCrud
{
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
}
