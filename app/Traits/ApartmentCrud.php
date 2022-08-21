<?php

declare(strict_types=1);

namespace App\Traits;

use App\Jobs\ReservationJob;
use App\Jobs\UpdateApartmentJob;
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
            'warranty_price'=> $attributes->input('warranty_price'),
            'commune'=> $attributes->input('commune'),
            'town' => $attributes->input('town'),
            'district'=> $attributes->input('district'),
            'address'=> $attributes->input('address'),
            'phone_number'=> $attributes->input('phone_number'),
            'email'=> $attributes->input('email'),
            'latitude'=> $attributes->input('latitude'),
            'longitude'=> $attributes->input('longitude'),
            'images'=> $this::uploadFiles($attributes),
            'reference' => $this->generateRandomTransaction(8),
            'type_id' => $attributes->input('type')
        ]);

        $apartment->categories()->attach($attributes->input('categories'));

        $this->createDetails($apartment, $attributes);

        dispatch(new ReservationJob($apartment))->delay(now()->addSecond(10));

        $this->service->success(
            messages: "Un nouveau appartement à été ajouter"
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
            'warranty_price'=> $attributes->input('warranty_price'),
            'commune'=> $attributes->input('commune'),
            'town' => $attributes->input('town'),
            'district'=> $attributes->input('district'),
            'address'=> $attributes->input('address'),
            'phone_number'=> $attributes->input('phone_number'),
            'email'=> $attributes->input('email'),
            'latitude'=> $attributes->input('latitude'),
            'longitude'=> $attributes->input('longitude'),
            'images'=> $this::uploadFiles($attributes),
            'type_id' => $attributes->input('type')
        ]);
        $house->categories()->attach($attributes->categories);

        $this->updateDetails($attributes, $house);

        dispatch(new UpdateApartmentJob())->delay(now()->addSeconds(10));

        $this->service->success(
            messages: "Un nouveau appartement à été modifier"
        );
        return $house;
    }

    private function createDetails($apartment, $attributes): void
    {
         Detail::query()
            ->create([
                'house_id' => $apartment->id,
                'number_rooms' => $attributes->input('number_rooms'),
                'number_pieces' => $attributes->input('number_pieces'),
                'toilet' => $attributes->input('toilet'),
                'electricity' => $attributes->input('electricity'),
                'description' => $attributes->input('description')
            ]);
    }

    private function updateDetails($attributes, $house): void
    {
        $department = Detail::query()
            ->where('house_id', '=', $house->id)
            ->firstOrFail();
        $department->update([
            'number_rooms' => $attributes->input('number_rooms'),
            'number_pieces' => $attributes->input('number_pieces'),
            'toilet' => $attributes->input('toilet'),
            'electricity' => $attributes->input('electricity'),
            'description' => $attributes->input('description')
        ]);
    }
}
