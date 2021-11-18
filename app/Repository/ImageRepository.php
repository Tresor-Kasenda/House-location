<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\Image;
use App\Repository\Interface\ImageRepositoryInterface;
use App\Services\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ImageRepository implements ImageRepositoryInterface
{
    use ImageUploader;

    public function getAll(): Collection
    {
        return Image::query()
            ->with('houses')
            ->latest()
            ->get();
    }

    public function getOneByKey(string $key): Model|Builder
    {
        return Image::query()
            ->where('key', '=', $key)
            ->firstOrFail();
    }

    public function create(Request $request): Builder|Model
    {
        $images = Image::query()
            ->create([
                'picture' => self::uploadFiles($request),
                'house_id' => $request->house_id
            ]);
        toast('Une image a ete ajouter', 'success');
        return $images;
    }

    public function update(string $key, $request): Model|Builder
    {
        $image = $this->getOneByKey($key);
        $this->removePathOfImages($image);
        $image->update([
            'picture' => self::uploadFiles($request),
            'house_id' => $request->house_id
        ]);
        toast('Une mise a jour a ete effectuer', 'success');
        return $image;
    }

    public function forceDelete(string $key): Model|Builder
    {
        $image = $this->getOneByKey($key);
        $image->delete();
        toast('Photo Supprimer avec success', 'info');
        return $image;
    }
}
