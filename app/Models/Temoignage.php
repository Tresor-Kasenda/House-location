<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Temoignage extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'user_id',
        'key'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
