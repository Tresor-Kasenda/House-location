<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Category extends Model
{
    use HasFactory,HasKey;

    protected $fillable = [
        'name'
    ];

    public function houses(): BelongsToMany
    {
        return $this->belongsToMany(
            House::class,
            'house_category',
            'house_id',
            'category_id'
        )->withTimestamps();
    }
}
