<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Slider extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    protected $fillable = [
        'key',
        'title',
        'images',
        'description'
    ];


    public function images()
    {
        return asset('storage/'. $this->images);
    }
}
