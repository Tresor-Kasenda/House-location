<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CategoryRepository
{
    public function getAll(): Collection
    {
        return Category::all();
    }

    public function create(Request $request): Model|Builder|Category
    {
        $category = Category::query()
            ->create([
                'name' => $request->name
            ]);
        toast('Une nouvelle catégorie à été  créer', 'success');
        return $category;
    }

    public function getOneByKey(string $id): Model|Builder
    {
        return Category::query()
            ->where('key', '=', $id)
            ->firstOrFail();
    }

    public function update(string $key, $request): Model|Builder
    {
        $category = $this->getOneByKey($key);
        $category->update([
            'name' => $request->name
        ]);
        toast('Une mise a jour a ete effectuer', 'success');
        return $category;
    }

    public function delete(string $key): Builder|Model
    {
        $category = $this->getOneByKey($key);
        $category->delete();
        toast('Categorie supprimer avec success', 'success');
        return $category;
    }
}
