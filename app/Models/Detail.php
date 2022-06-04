<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $user_id
 * @property-read House $house
 * @method static Builder|Detail newModelQuery()
 * @method static Builder|Detail newQuery()
 * @method static Builder|Detail query()
 * @method static Builder|Detail whereChamberNumber($value)
 * @method static Builder|Detail whereCreatedAt($value)
 * @method static Builder|Detail whereElectricity($value)
 * @method static Builder|Detail whereHouseId($value)
 * @method static Builder|Detail whereId($value)
 * @method static Builder|Detail whereKey($value)
 * @method static Builder|Detail whereRoomNumber($value)
 * @method static Builder|Detail whereToilette($value)
 * @method static Builder|Detail whereUpdatedAt($value)
 * @method static Builder|Detail whereUserId($value)
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
