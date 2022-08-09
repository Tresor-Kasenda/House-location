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
 * App\Models\Role
 *
 * @property int $id
 * @property string $key
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|User[] $users
 * @property-read int|null $users_count
 * @method static Builder|Role newModelQuery()
 * @method static Builder|Role newQuery()
 * @method static \Illuminate\Database\Query\Builder|Role onlyTrashed()
 * @method static Builder|Role query()
 * @method static Builder|Role whereCreatedAt($value)
 * @method static Builder|Role whereDeletedAt($value)
 * @method static Builder|Role whereId($value)
 * @method static Builder|Role whereKey($value)
 * @method static Builder|Role whereName($value)
 * @method static Builder|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Role withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Role withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\RoleFactory factory(...$parameters)
 */
class Role extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    protected $fillable = [
        'key',
        'name'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
