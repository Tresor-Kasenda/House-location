<?php
declare(strict_types=1);

namespace App\Repository;

use App\Enums\HouseEnum;
use App\Models\House;
use App\Services\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ApartmentRepository
{
    use ImageUploader;

    public function getAll(): Collection
    {
        return House::query()
            ->latest()
            ->get();
    }

    public function getAllVerified(): Collection
    {
        return House::query()
            ->with('images')
            ->when('status',
                fn($builder) => $builder->where('status', HouseEnum::CONFIRM)
            )
            ->orderByDesc('created_at')
            ->get();
    }

    public function getOneByKey(string $key): Model|Builder
    {
        return House::query()
            ->where('key', '=', $key)
            ->firstOrFail();
    }

    public function getOnlyValidatedByKey(string $id): House|Builder
    {
        return House::query()
            ->where('key', '=', $id)
            ->where('status', '=', HouseEnum::CONFIRM)
            ->firstOrFail();
    }

    public function create(Request $request): Builder|Model
    {
        $apartment = House::query()
            ->create([
                'price_per_month' => $request->price_per_month,
                'address'=> $request->address,
                'guarantees'=> $request->guarantees,
                'phone_number'=> $request->phone_number,
                'email'=> $request->email,
                'latitude'=> $request->latitude,
                'longitude'=> $request->longitude,
                'picture'=> $this::uploadFiles($request),
                'commune'=> $request->commune,
                'district'=> $request->district,
                'piece_number'=> $request->piece_number,
                'characteristic' => json_encode($request->characteristic),
                'town' => $request->town
            ]);
        $apartment->categories()->attach($request->categories);
        toast("Un nouveau appartement à été ajouter", 'success');
        return $apartment;
    }

    public function moveToTrash(string $key): Model|Builder|int|null
    {
        $room = $this->getOneByKey($key);
        if ($room->status == true){
            toast('Veillez désactiver votre appartement avant de le suspendre', 'warning');
            return null;
        }
        $room->delete();
        toast('L appartement a été suspéndue pour des raisons de sécurité', 'success');
        return $room;
    }

    public function trashed(): array|Collection
    {
        return House::onlyTrashed()
            ->orderByDesc('created_at')
            ->get();
    }
}
