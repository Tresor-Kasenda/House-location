<?php
declare(strict_types=1);

namespace App\Repository;


use App\Models\Category;
use App\Repository\Interface\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Category::all();
    }

    /**
     * @param Request $request
     * @return Category
     */
    public function create(Request $request): Category
    {
        return Category::create([
           'name' => $request->name
        ]);
    }

    /**
     * @param string $id
     * @return Category
     */
    public function getOneByKey(string $id): Category
    {
        // TODO: Implement getOneByKey() method.
    }

    /**
     * @param string $key
     * @param array $attributes
     * @return int
     */
    public function update(string $key, array $attributes): int
    {
        // TODO: Implement update() method.
    }

    /**
     * @param string $key
     * @return int
     */
    public function delete(string $key): int
    {
        // TODO: Implement delete() method.
    }
}
