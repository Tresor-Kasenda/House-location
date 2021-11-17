<?php
declare(strict_types=1);

use App\Models\House;
use App\Repository\Interface\ApartmentRepositoryInterface;
use App\Services\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class ApartmentRepository implements ApartmentRepositoryInterface
{

    use ImageUploader;

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return House::all();
    }

    /**
     * @param array $attributes
     * @return House
     */
    public function create(array $attributes): House
    {
        return House::create($attributes);
    }


    /**
     * @return Collection
     */
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

    /**
     * @param $id
     * @return House|Builder
     */
    public function getOneById(Int $id): House|Builder
    {
        return House::query()
            ->where('key', '=', $id)
            ->where('status', '=', House::APARTMENT_CONFIRMED)
            ->firstOrFail();
    }

    /**
     * @param Int $categoryId
     * @return Collection
     */
    public function getAllByCategoryId(Int $categoryId): Collection
    {
        // TODO: Implement getAllByCategory() method.
    }
}
