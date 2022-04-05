<?php
declare(strict_types=1);

namespace App\Repository\Admins;

use App\Contracts\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getContents(): Collection
    {
        return Category::all();
    }

    public function created($attributes): Model|Builder|Category
    {
        $category = Category::query()
            ->create([
                'name' => $attributes->name
            ]);
        toast('Une nouvelle catégorie à été  créer', 'success');
        return $category;
    }

    public function getElementByKey(string $key): Model|Builder
    {
        return Category::query()
            ->where('key', '=', $key)
            ->firstOrFail();
    }

    public function updated(string $key, $attributes): Model|Builder
    {
        $category = $this->getElementByKey($key);
        $category->update([
            'name' => $attributes->name
        ]);
        toast('Une mise a jour a ete effectuer', 'success');
        return $category;
    }

    public function deleted(string $key): Builder|Model
    {
        $category = $this->getElementByKey($key);
        $category->delete();
        toast('Categorie supprimer avec success', 'success');
        return $category;
    }
}
