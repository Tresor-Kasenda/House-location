<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Traits\ImageUploader;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Contracts\ImageRepositoryInterface;

class ImageRepository implements ImageRepositoryInterface
{
    use ImageUploader;

    public function getContents(): Collection
    {
        return Image::query()
            ->with('houses')
            ->orderByDesc('created_at')
            ->get();
    }

    public function show(string $key): Model|Builder
    {
        return Image::query()
            ->where('key', '=', $key)
            ->firstOrFail();
    }

    public function create(Request $request): Builder|Model
    {
        $images = Image::query()
            ->create([
                'images' => self::uploadFiles($request),
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
            'images' => self::uploadFiles($request),
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
