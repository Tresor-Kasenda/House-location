<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

/**
 * App\Models\Detail
 *
 * @property int $id
 * @property string $key
 * @property int $house_id
 * @property int|null $chamberNumber
 * @property string|null $electricity
 * @property string|null $roomNumber
 * @property string|null $toilette
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property-read \App\Models\House $house
 * @method static \Illuminate\Database\Eloquent\Builder|Detail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereChamberNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereElectricity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereHouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereRoomNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereToilette($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereUserId($value)
 * @mixin \Eloquent
 */
class Detail extends Model
{
    use HasFactory, HasKey;

    protected $guarded = [];

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class, 'house_id');
    }
}
