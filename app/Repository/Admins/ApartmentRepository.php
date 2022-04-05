<?php
declare(strict_types=1);

namespace App\Repository\Admins;

use App\Contracts\ApartmentRepositoryInterface;
use App\Enums\HouseEnum;
use App\Models\House;
use App\Traits\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ApartmentRepository implements ApartmentRepositoryInterface
{
    use ImageUploader;

    public function getContents(): Collection
    {
        return House::query()
            ->inRandomOrder()
            ->get();
    }

    public function getAllVerified(): Collection
    {
        return House::query()
            ->with('image')
            ->when('status',
                fn($builder) => $builder->where('status', HouseEnum::CONFIRM)
            )
            ->orderByDesc('created_at')
            ->get();
    }

    public function show(string $key): Model|Builder
    {
        return House::query()
            ->where('key', '=', $key)
            ->firstOrFail();
    }

    public function getOnlyValidatedByKey(string $id): House|Builder
    {
        $house = House::query()
            ->where('key', '=', $id)
            ->where('status', '=', HouseEnum::CONFIRM)
            ->firstOrFail();
        return $house->load('image');
    }

    public function created($attributes): Builder|Model
    {
        $apartment = House::query()
            ->create([
                'price_per_month' => $attributes->price_per_month,
                'address'=> $attributes->address,
                'guarantees'=> $attributes->guarantees,
                'phone_number'=> $attributes->phone_number,
                'email'=> $attributes->email,
                'latitude'=> $attributes->latitude,
                'longitude'=> $attributes->longitude,
                'images'=> $this::uploadFiles($attributes),
                'commune'=> $attributes->commune,
                'district'=> $attributes->district,
                'piece_number'=> $attributes->piece_number,
                'town' => $attributes->town
            ]);
        $apartment->categories()->attach($attributes->categories);
        toast("Un nouveau appartement à été ajouter", 'success');
        return $apartment;
    }

    public function deleted(string $key): Model|Builder|int|null
    {
        $room = $this->show($key);
        if ($room->status == true){
            toast('Veillez désactiver votre appartement avant de le suspendre', 'warning');
            return null;
        }
        $room->delete();
        toast('L appartement a été suspéndue pour des raisons de sécurité', 'success');
        return $room;
    }

    public function updated(string $key, $attributes)
    {
        // TODO: Implement updated() method.
    }
}
