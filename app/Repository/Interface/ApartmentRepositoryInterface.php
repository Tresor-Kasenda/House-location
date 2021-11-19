<?php
declare(strict_types=1);

namespace App\Repository\Interface;

use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface ApartmentRepositoryInterface
{

    /**
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * @param Request $request
     * @return Builder|Model
     */
    public function create(Request $request): Builder|Model;


    /**
     * @return Collection
     */
    public function getAllVerified(): Collection;

    /**
     * @param string $key
     * @return House|Builder
     */
    public function getOneByKey(string $key): Model|Builder;

    /**
     * @param string $key
     * @param array $attributes
     * @return Builder|Model
     */
    public function update(string $key,array $attributes): Builder|Model;

    /**
     * @param string $categoryId
     * @return Collection
     */
    public function getAllByCategoryId(string $categoryId): Collection;

    /**
     * @param string $key
     * @return Model|Builder|int|null
     */
    public function moveToTrash(string $key): Model|Builder|int|null;

    /**
     * @param string $key
     * @return bool|null
     */
    public function restore(string $key) : ?bool;

    /**
     * @param string $key
     * @return int
     */
    public function forceDelete(string $key) : int;

    public function getOnlyValidatedByKey(string $id): House|Builder;
}
