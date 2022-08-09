<?php

declare(strict_types=1);

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

/**
 * App\Models\Commissioner
 *
 * @property int $id
 * @property string $key
 * @property int $user_id
 * @property string|null $phone_number
 * @property string|null $address
 * @property string|null $images
 * @property string|null $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|House[] $apartments
 * @property-read int|null $apartments_count
 * @property-read User $user
 * @method static Builder|Commissioner newModelQuery()
 * @method static Builder|Commissioner newQuery()
 * @method static \Illuminate\Database\Query\Builder|Commissioner onlyTrashed()
 * @method static Builder|Commissioner query()
 * @method static Builder|Commissioner whereAddress($value)
 * @method static Builder|Commissioner whereCreatedAt($value)
 * @method static Builder|Commissioner whereDeletedAt($value)
 * @method static Builder|Commissioner whereEmail($value)
 * @method static Builder|Commissioner whereId($value)
 * @method static Builder|Commissioner whereImages($value)
 * @method static Builder|Commissioner whereKey($value)
 * @method static Builder|Commissioner wherePhoneNumber($value)
 * @method static Builder|Commissioner whereUpdatedAt($value)
 * @method static Builder|Commissioner whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Commissioner withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Commissioner withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\CommissionerFactory factory(...$parameters)
 */
class Commissioner extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    protected $fillable = [
        'key',
        'phone_number',
        'address',
        'images',
        'email'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function noteCommissionnaire()
    {
        return $this->hasOne(Notecommissionnaire::class);
    }


    public function apartments(): HasMany
    {
        return  $this->hasMany(House::class);
    }

}
