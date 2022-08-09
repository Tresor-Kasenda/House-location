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
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

/**
 * App\Models\Detail
 *
 * @property int $id
 * @property string $key
 * @property int $house_id
 * @property int|null $room_number
 * @property int|null $number_pieces
 * @property string $toilet
 * @property int $electricity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read House $house
 * @method static Builder|Detail newModelQuery()
 * @method static Builder|Detail newQuery()
 * @method static \Illuminate\Database\Query\Builder|Detail onlyTrashed()
 * @method static Builder|Detail query()
 * @method static Builder|Detail whereCreatedAt($value)
 * @method static Builder|Detail whereDeletedAt($value)
 * @method static Builder|Detail whereElectricity($value)
 * @method static Builder|Detail whereHouseId($value)
 * @method static Builder|Detail whereId($value)
 * @method static Builder|Detail whereKey($value)
 * @method static Builder|Detail whereNumberPieces($value)
 * @method static Builder|Detail whereRoomNumber($value)
 * @method static Builder|Detail whereToilet($value)
 * @method static Builder|Detail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Detail withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Detail withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\DetailFactory factory(...$parameters)
 */
class Detail extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    protected $fillable = [
        'key',
        'room_number',
        'electricity',
        'number_pieces',
        'toilette',
        'house_id'
    ];

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class, 'house_id');
    }
}
