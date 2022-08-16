<?php
declare(strict_types=1);

namespace App\Models;

use Database\Factories\ReservationFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property string $key
 * @property int|null $user_id
 * @property int $house_id
 * @property mixed $status
 * @property string $name
 * @property string $address
 * @property string $phones
 * @property string $messages
 * @property string $reference
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read House $house
 * @property-read User|null $user
 * @method static Builder|Reservation newModelQuery()
 * @method static Builder|Reservation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Reservation onlyTrashed()
 * @method static Builder|Reservation query()
 * @method static Builder|Reservation whereAddress($value)
 * @method static Builder|Reservation whereCreatedAt($value)
 * @method static Builder|Reservation whereDeletedAt($value)
 * @method static Builder|Reservation whereHouseId($value)
 * @method static Builder|Reservation whereId($value)
 * @method static Builder|Reservation whereKey($value)
 * @method static Builder|Reservation whereMessages($value)
 * @method static Builder|Reservation whereName($value)
 * @method static Builder|Reservation wherePhones($value)
 * @method static Builder|Reservation whereReference($value)
 * @method static Builder|Reservation whereStatus($value)
 * @method static Builder|Reservation whereUpdatedAt($value)
 * @method static Builder|Reservation whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Reservation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Reservation withoutTrashed()
 * @mixin Eloquent
 * @method static ReservationFactory factory(...$parameters)
 */
class Reservation extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    protected $fillable = [
        'key',
        'status',
        'name',
        'address',
        'phones',
        'messages',
        'transaction_code',
        'user_id',
        'house_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }
}
