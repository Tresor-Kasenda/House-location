<?php

declare(strict_types=1);

namespace App\Repository\Interface;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface {

    /**
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * @param Request $request
     * @return Model|Builder|Category
     */
    public function create(Request $request):  Model|Builder|Category;

    /**
     * @param string $id
     * @return Model|Builder
     */
    public function getOneByKey(string $id): Model|Builder;

    /**
     * @param string $key
     * @param  $request
     * @return Model|Builder
     */
    public function update(string $key, $request): Model|Builder;

    public function delete(string $key) : Model|Builder;

}
