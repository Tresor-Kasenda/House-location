<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait ApartmentCrud
{
    use ImageUploader;

    public function created($attributes): Builder|Model
    {
        $apartment = auth()->user()->house()->create([
            'prices' => $attributes->input('prices'),
            'commune'=> $attributes->input('commune'),
            'town' => $attributes->input('town'),
            'district'=> $attributes->input('district'),
            'address'=> $attributes->input('address'),
            'guarantees'=> $attributes->input('guarantees'),
            'phone_number'=> $attributes->input('phone_number'),
            'email'=> $attributes->input('email'),
            'latitude'=> $attributes->input('latitude'),
            'longitude'=> $attributes->input('longitude'),
            'images'=> $this::uploadFiles($attributes),
            'reference' => $this->generateRandomTransaction(6),
            'type_id' => $attributes->input('type')
        ]);
        $apartment->categories()->attach($attributes->categories);
        $this->createDetails($apartment, $attributes);
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
            'commune'=> $attributes->input('commune'),
            'town' => $attributes->input('town'),
            'district'=> $attributes->input('district'),
            'address'=> $attributes->input('address'),
            'guarantees'=> $attributes->input('guarantees'),
            'phone_number'=> $attributes->input('phone_number'),
            'email'=> $attributes->input('email'),
            'latitude'=> $attributes->input('latitude'),
            'longitude'=> $attributes->input('longitude'),
            'images'=> $this::uploadFiles($attributes),
            'type_id' => $attributes->input('type')
        ]);
        $house->categories()->attach($attributes->categories);

        $this->service->success(
            messages: "Un nouveau appartement à été modifier",
            type: "success"
        );
        return $house;
    }

    public function createDetails($apartment, $attributes)
    {
         Detail::query()
            ->create([
                'house_id' => $apartment->id,
                'room_number' => $attributes->input('room_number'),
                'number_pieces' => $attributes->input('room_pieces'),
                'toilet' => $attributes->input('toilet'),
                'electricity' => $attributes->input('electricity')
            ]);
    }
}
