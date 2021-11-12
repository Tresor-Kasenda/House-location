<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class House extends Model
{
    use HasFactory, HasKey;

    protected $fillable = [
        'price_per_month',
        'address',
        'garanties',
        'phone_number',
        'email',
        'latitude',
        'longitude',
        'picture',
        'commune',
        'quartier',
        'piece_number',
        'toilette',
        'electricity',
        'water',
        'status'
    ];

    protected $casts = [
        'price_per_month' => 'number',
        'garanties' => 'number',
        'phone_number' => 'number',
        'latitude' => 'decimal',
        'longitude' => 'decimal',
        'piece_number' => 'number',
        'status' => 'boolean'
    ];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'resource');
    }
}
