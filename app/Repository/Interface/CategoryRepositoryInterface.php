<?php

declare(strict_types=1);

namespace App\Repository\Interface;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface {

    /**
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * @param Request $request
     * @return Category
     */
    public function create(Request $request): Category;

    /**
     * @param string $id
     * @return Category
     */
    public function getOneByKey(string $id): Category;

    /**
     * @param string $key
     * @param array $attributes
     * @return int
     */
    public function update(string $key,array $attributes): int;

    public function delete(string $key) : int;

}
