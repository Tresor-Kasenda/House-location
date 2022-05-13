<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

/**
 * App\Models\Image
 *
 * @property int $id
 * @property string $key
 * @property string $images
 * @property int $house_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property-read \App\Models\House $houses
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereHouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUserId($value)
 * @mixin \Eloquent
 */
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
