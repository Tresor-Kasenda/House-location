<?php
declare(strict_types=1);

namespace App\Repository\Interface;

use App\Http\Requests\ApartmementRequest;
use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ApartmentRepositoryInterface
{

    public function getAll(): Collection;

    /**
     * @param array $attributes
     * @return House
     */
    public function create(array $attributes): House;


    /**
     * @return Collection
     */
    public function getAllVerified(): Collection;

    /**
     * @param string $id
     * @return House|Builder
     */
    public function getOneByKey(string $id): House|Builder;

    /**
     * @param string $key
     * @param array $attributes
     * @return int
     */
    public function update(string $key,array $attributes): int;

    /**
     * @param string $categoryId
     * @return Collection
     */
    public function getAllByCategoryId(string $categoryId): Collection;
}
