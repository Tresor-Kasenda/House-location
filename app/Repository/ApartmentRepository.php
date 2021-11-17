<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\House;
use App\Repository\Interface\ApartmentRepositoryInterface;
use App\Services\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ApartmentRepository implements ApartmentRepositoryInterface
{
    use ImageUploader;

    public function getAll(): Collection
    {
        return House::all();
    }


    public function create(Request $request): House
    {
        $imageUrl = $this::uploadFiles($request);
        $request->picture = $imageUrl;

        return House::create([
            'price_per_month' => $request->price_per_month,
            'address'=> $request->address,
            'guarantees'=> $request->guarantees,
            'phone_number'=> $request->phone_number,
            'email'=> $request->email,
            'latitude'=> $request->latitude,
            'longitude'=> $request->longitude,
            'picture'=> $request->picture,
            'commune'=> $request->commune,
            'district'=> $request->district,
            'piece_number'=> $request->piece_number,
            'characteristic' => str_replace("'", "\'", json_encode($request->characteristic))
        ]);
    }

    public function getAllVerified(): Collection
    {
        return House::query()
            ->with('images')
            ->when('status',
                fn($builder) => $builder->where('status', House::APARTMENT_CONFIRMED)
            )
            ->orderBy('created_at', 'DESC')
            ->get();
    }


    public function getOneByKey(string $id): House|Builder
    {
        return House::query()
            ->where('key', '=', $id)
            ->firstOrFail();
    }

    public function getOnlyValidatedByKey(string $id): House|Builder {
        return House::query()
            ->where('key', '=', $id)
            ->where('status', '=', House::APARTMENT_CONFIRMED)
            ->firstOrFail();
    }

    public function getAllByCategoryId(string $categoryId): Collection
    {
        // TODO: Implement getAllByCategory() method.
    }

    /**
     * @param string $key
     * @param array $attributes
     * @return int
     */
    public function update(string $key,array $attributes): int
    {
        return House::query()
            ->where('key', '=', $key)
            ->update($attributes);
    }

    /**
     * @param string $key
     * @return bool
     */
    public function moveToTrash(string $key): int
    {
        return House::query()->where('key','=',$key)->delete();
    }

    /**
     * @param string $key
     * @return bool|null
     */
    public function restore(string $key): ?bool
    {
        return House::withTrashed()->where('key', $key)->restore();
    }

    /**
     * @param string $key
     * @return int
     */
    public function forceDelete(string $key): int
    {
        $house = House::withTrashed()->where('key', $key);
        $this->removePathOfImages($house);
        return $house->forceDelete();
    }
}
