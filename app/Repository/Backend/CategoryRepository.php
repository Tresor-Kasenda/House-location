<?php

declare(strict_types=1);

namespace App\Repository\Backend;

use App\Contracts\CategoryRepositoryInterface;
use App\Models\Category;
use App\Services\ToastService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function __construct(
        protected ToastService $service
    ) {
    }

    public function getContents(): Collection
    {
        return Category::query()
            ->select([
                'id',
                'name',
            ])
            ->orderByDesc('created_at')
            ->get();
    }

    public function created($attributes): Model|Builder|Category
    {
        $category = Category::query()
            ->create([
                'name' => $attributes->name,
            ]);
        $this->service->success('Category created with successfully');

        return $category;
    }

    public function getElementByKey(string $key): Model|Builder
    {
        return Category::query()
            ->where('id', '=', $key)
            ->firstOrFail();
    }

    public function updated(string $key, $attributes): Model|Builder
    {
        $category = $this->getElementByKey($key);
        $category->update([
            'name' => $attributes->name,
        ]);
        $this->service->success('Category updated with successfully');

        return $category;
    }

    public function deleted(string $key): Builder|Model
    {
        $category = $this->getElementByKey($key);
        $category->delete();
        $this->service->success('Category updated with successfully');

        return $category;
    }
}
