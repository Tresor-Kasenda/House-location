<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Image extends Model
{
    use HasFactory, HasKey;

    protected $guarded = [];

    public function houses(): BelongsTo
    {
        return $this->belongsTo(House::class, 'house_id');
    }

    /**
     * @return Collection
     */
    public static function getImagesHouse(): Collection
    {
        return DB::table('images')
            ->select([
                'images.id',
                'images.house_id',
                'images.images',
                'images.key'
            ])
            ->leftJoin('houses', 'houses.id', '=', 'images.house_id')
            ->where('images.user_id', '=', auth()->id())
            ->orderBy('images.created_at', 'desc')
            ->get();
    }
}
