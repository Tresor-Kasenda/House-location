<?php
declare(strict_types=1);

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

/**
 * App\Models\Type
 *
 * @property int $id
 * @property string $key
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|House[] $houses
 * @property-read int|null $houses_count
 * @method static Builder|Type newModelQuery()
 * @method static Builder|Type newQuery()
 * @method static \Illuminate\Database\Query\Builder|Type onlyTrashed()
 * @method static Builder|Type query()
 * @method static Builder|Type whereCreatedAt($value)
 * @method static Builder|Type whereDeletedAt($value)
 * @method static Builder|Type whereId($value)
 * @method static Builder|Type whereKey($value)
 * @method static Builder|Type whereName($value)
 * @method static Builder|Type whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Type withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Type withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\TypeFactory factory(...$parameters)
 */
class Type extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    protected $fillable = [
        'name',
        'key'
    ];

    public function houses(): HasMany
    {
        return $this->hasMany(House::class);
    }
}
