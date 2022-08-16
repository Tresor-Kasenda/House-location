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
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'images',
        'user_id',
        'house_id'
    ];

    public function houses(): BelongsTo
    {
        return $this->belongsTo(House::class, 'house_id');
    }

    public static function getImagesHouse(): Collection
    {
        return DB::table('images')
            ->select([
                'images.id',
                'images.house_id',
                'images.images'
            ])
            ->leftJoin('houses', 'houses.id', '=', 'images.house_id')
            ->where('images.user_id', '=', auth()->id())
            ->orderBy('images.created_at', 'desc')
            ->get();
    }
}
