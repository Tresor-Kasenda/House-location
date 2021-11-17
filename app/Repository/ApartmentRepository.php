<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\House;
use App\Repository\Interface\ApartmentRepositoryInterface;
use App\Services\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class ApartmentRepository implements ApartmentRepositoryInterface
{
    use ImageUploader;

    public function getAll(): Collection
    {
        return House::all();
    }

    public function create(array $attributes): House
    {
        return House::create($attributes);
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

    public function getAllByUserId($id): Collection
    {
        // TODO: Implement getAllByUserId() method.
    }

    public function getOneById(Int $id): House|Builder
    {
        return House::query()
            ->where('key', '=', $id)
            ->where('status', '=', House::APARTMENT_CONFIRMED)
            ->firstOrFail();
    }

    public function getAllForLocation(): Collection
    {
        // TODO: Implement getAllForLocation() method.
    }

    public function getAllForSale(): Collection
    {
        // TODO: Implement getAllForSale() method.
    }


    public function getAllByCategoryId(Int $categoryId): Collection
    {
        // TODO: Implement getAllByCategory() method.
    }
}
