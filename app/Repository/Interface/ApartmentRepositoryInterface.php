<?php
declare(strict_types=1);

namespace App\Repository\Interface;

use App\Http\Requests\ApartmementRequest;
use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use phpDocumentor\Reflection\Types\Boolean;

interface ApartmentRepositoryInterface
{

    /**
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * @param Request $request
     * @return House
     */
    public function create(Request $request): House;


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

    /**
     * @param $key
     * @return bool
     */
    public function moveToTrash(string $key) : int;

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
