<?php
declare(strict_types=1);

namespace App\Repository\Interface;

use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface ImageRepositoryInterface
{

    /**
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * @param string $key
     * @return House|Builder
     */
    public function getOneByKey(string $key): Model|Builder;


    /**
     * @param Request $request
     * @return Builder|Model
     */
    public function create(Request $request): Builder|Model;

    /**
     * @param string $key
     * @param $request
     * @return Model|Builder
     */
    public function update(string $key, $request): Model|Builder;

    /**
     * @param string $key
     * @return Model|Builder
     */
    public function forceDelete(string $key) : Model|Builder;
}
