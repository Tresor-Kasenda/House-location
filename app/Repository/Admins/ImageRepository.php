<?php
declare(strict_types=1);

namespace App\Repository\Admins;

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

    public function created($attributes): Builder|Model
    {
        $images = Image::query()
            ->create([
                'images' => self::uploadFiles($attributes),
                'house_id' => $attributes->house_id
            ]);
        toast('Une image a ete ajouter', 'success');
        return $images;
    }

    public function updated(string $key, $attributes): Model|Builder
    {
        $image = $this->show(key: $key);
        $this->removePathOfImages($image);
        $image->update([
            'images' => self::uploadFiles($attributes),
            'house_id' => $attributes->house_id
        ]);
        toast('Une mise a jour a ete effectuer', 'success');
        return $image;
    }

    public function deleted(string $key): Model|Builder
    {
        $image = $this->show(key: $key);
        $image->delete();
        toast('Photo Supprimer avec success', 'info');
        return $image;
    }
}
