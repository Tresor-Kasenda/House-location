<?php
declare(strict_types=1);

use App\Models\House;
use App\Services\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class ApartmentRepository implements \App\Repository\Interface\ApartmentRepositoryInterface
{

    use ImageUploader;

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @param array $attributes
     * @return House
     */
    public function create(array $attributes): House
    {
        // TODO: Implement create() method.
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
     * @return Collection
     */
    public function getAllByUserId($id): Collection
    {
        // TODO: Implement getAllByUserId() method.
    }

    /**
     * @param $id
     * @return House|Builder
     */
    public function getOneById($id): House|Builder
    {
        return House::query()
            ->where('key', '=', $id)
            ->where('status', '=', House::APARTMENT_CONFIRMED)
            ->firstOrFail();
    }

    /**
     * @return Collection
     */
    public function getAllForLocation(): Collection
    {
        // TODO: Implement getAllForLocation() method.
    }

    /**
     * @return Collection
     */
    public function getAllForSale(): Collection
    {
        // TODO: Implement getAllForSale() method.
    }

    /**
     * @return Collection
     */
    public function getAllByCategory(): Collection
    {
        // TODO: Implement getAllByCategory() method.
    }
}
