<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Category extends Model
{
    use HasFactory, HasKey;

    protected $guarded = [];

    public function houses(): BelongsToMany
    {
        return $this
            ->belongsToMany(House::class, 'house_category', 'house_id', 'category_id')
            ->withTimestamps();
    }
}
