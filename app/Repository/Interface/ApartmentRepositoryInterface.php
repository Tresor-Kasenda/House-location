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
     * @return Collection
     */
    public function getAllByUserId($id) : Collection;

    /**
     * @param $id
     * @return House|Builder
     */
    public function getOneById($id) : House|Builder;

    /**
     * @return Collection
     */
    public function getAllForLocation() : Collection;

    /**
     * @return Collection
     */
    public function getAllForSale() : Collection;

    /**
     * @return Collection
     */
    public function getAllByCategory() : Collection;
}
