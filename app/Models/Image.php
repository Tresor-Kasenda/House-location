<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'images',
        'user_id',
        'house_id',
    ];

    public function houses(): BelongsTo
    {
        return $this->belongsTo(House::class, 'house_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
