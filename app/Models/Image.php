<?php
declare(strict_types=1);

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
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
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read House $houses
 * @method static Builder|Image newModelQuery()
 * @method static Builder|Image newQuery()
 * @method static \Illuminate\Database\Query\Builder|Image onlyTrashed()
 * @method static Builder|Image query()
 * @method static Builder|Image whereCreatedAt($value)
 * @method static Builder|Image whereDeletedAt($value)
 * @method static Builder|Image whereHouseId($value)
 * @method static Builder|Image whereId($value)
 * @method static Builder|Image whereImages($value)
 * @method static Builder|Image whereKey($value)
 * @method static Builder|Image whereUpdatedAt($value)
 * @method static Builder|Image whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Image withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Image withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\ImageFactory factory(...$parameters)
 */
class Image extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    protected $fillable = [
        'key',
        'images'
    ];

    public function houses(): BelongsTo
    {
        return $this->belongsTo(House::class, 'house_id');
    }

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
