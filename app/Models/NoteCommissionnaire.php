<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class NoteCommissionnaire extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    protected $fillable = [
        'key',
        'note',
        'commissioner_id'
    ];
    public function commissioner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
