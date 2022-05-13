<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

/**
 * App\Models\Commissioner
 *
 * @property int $id
 * @property string $key
 * @property int $user_id
 * @property string|null $phoneNumber
 * @property string|null $address
 * @property string|null $images
 * @property string|null $email
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\House[] $apartments
 * @property-read int|null $apartments_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissioner whereUserId($value)
 * @mixin \Eloquent
 */
class Commissioner extends Model
{
    use HasFactory, HasKey;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function apartments(): HasMany
    {
        return  $this->hasMany(House::class);
    }

}
