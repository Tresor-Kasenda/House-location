<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait ApartmentCrud
{
    use ImageUploader;

    public function created($attributes): Builder|Model
    {
        $apartment = House::query()
            ->create([
                'prices' => $attributes->input('prices'),
                'address'=> $attributes->input('address'),
                'guarantees'=> $attributes->input('guarantees'),
                'phone_number'=> $attributes->input('phoneNumber'),
                'email'=> $attributes->input('email'),
                'latitude'=> $attributes->input('latitude'),
                'longitude'=> $attributes->input('longitude'),
                'images'=> $this::uploadFiles($attributes),
                'commune'=> $attributes->input('commune'),
                'district'=> $attributes->input('district'),
                'town' => $attributes->input('town'),
                'user_id' => auth()->id(),
                'reference' => $this->generateRandomTransaction(6),
                'type_id' => $attributes->input('type')
            ]);
        $apartment->categories()->attach($attributes->categories);
        $this->service->success(
            messages: "Un nouveau appartement à été ajouter",
            type: "success"
        );
        return $apartment;
    }

    public function updated(string $key, $attributes): Model|Builder
    {
        $house = $this->getHouse(key: $key);
        $this->removePathOfImages($house);
        $house->categories()->detach($attributes->categories);
        $house->update([
            'prices' => $attributes->input('prices'),
            'address'=> $attributes->input('address'),
            'guarantees'=> $attributes->input('guarantees'),
            'phone_number'=> $attributes->input('phoneNumber'),
            'email'=> $attributes->input('email'),
            'latitude'=> $attributes->input('latitude'),
            'longitude'=> $attributes->input('longitude'),
            'commune'=> $attributes->input('commune'),
            'district'=> $attributes->input('district'),
            'images'=> $this::uploadFiles($attributes),
            'roomNumber'=> $attributes->roomNumber,
            'town' => $attributes->town,
            'type_id' => $attributes->input('type')
        ]);
        $house->categories()->attach($attributes->categories);
        $this->service->success(
            messages: "Un nouveau appartement à été modifier",
            type: "success"
        );
        return $house;
    }
}
