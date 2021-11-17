<?php
declare(strict_types=1);

namespace  App\Repository\Interface;

use App\Http\Requests\ApartmementRequest;
use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ApartmentRepositoryInterface
{

    public function getAll() : Collection;

    /**
     * @param array $attributes
     * @return House
     */
    public function create(array $attributes) : House;


    /**
     * @return Collection
     */
    public function getAllVerified() : Collection;

    /**
     * @param $id
     * @return House|Builder
     */
    public function getOneById(Int $id) : House|Builder;

    /**
     * @param Int $categoryId
     * @return Collection
     */
    public function getAllByCategoryId(Int $categoryId) : Collection;
}
