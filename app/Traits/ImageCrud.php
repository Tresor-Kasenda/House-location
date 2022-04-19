<?php
declare(strict_types=1);

namespace App\Traits;

use App\Models\Image;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

trait ImageCrud
{
    public function getContents(): Collection|array
    {
        return Image::query()
            ->with('houses')
            ->orderByDesc('created_at')
            ->get();
    }

    public function show(string $key): Model|Builder|null
    {
        return Image::query()
            ->where('key', '=', $key)
            ->first();
    }

    public function created($attributes): Model|Builder
    {
        $image = Image::query()
            ->create([
                'images' => self::uploadFiles($attributes),
                'house_id' => $attributes->input('house_id')
            ]);
        toast('images added with success', 'success');
        return $image;
    }

    public function updated(string $key, $attributes): Model|Builder|null
    {
        $image = $this->show(key: $key);
        $this->removePathOfImages($image);
        $image->update([
            'images' => self::uploadFiles($attributes),
            'house_id' => $attributes->input('house_id')
        ]);
        toast('images successfully modified', 'success');
        return $image;
    }

    public function deleted(string $key): Model|Builder|null
    {
        $image = $this->show(key: $key);
        $this->removePathOfImages($image);
        $image->delete();
        toast('images successfully deleted', 'success');
        return $image;
    }
}
