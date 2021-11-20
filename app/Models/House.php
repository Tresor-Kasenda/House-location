<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class House extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    const APARTMENT_CONFIRMED = true;
    const APARTMENT_UNCONFIRMED = false;

    protected $fillable = [
        'price_per_month',
        'address',
        'guarantees',
        'phone_number',
        'email',
        'latitude',
        'longitude',
        'picture',
        'commune',
        'district',
        'characteristic',
        'piece_number',
        'status',
        'town'
    ];

    protected $casts = [
        'price_per_month' => 'integer',
        'guarantees' => 'integer',
        'phone_number' => 'integer',
        'latitude' => 'decimal',
        'longitude' => 'decimal',
        'piece_number' => 'integer',
        'status' => 'boolean'
    ];

    public function getGuaranties(): string
    {
        return number_format($this->guarantees,
                2,
                '.',
                ' '). '$';
    }

    public function getPricePerMonth(): string
    {
        return number_format($this->price_per_month,
        2,
        '.',
        ' '
        ). '$';
    }
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            Category::class,
            'house_category',
            'house_id',
            'category_id'
        )->withTimestamps();
    }

    public function getNameLinkAttribute(): string
    {
        $title = __('app.show_detail_title', [
            'name' => $this->title, 'type' => __('outlet.outlet'),
        ]);
        $link = '<a href="'.route('dashboard.index', $this).'"';
        $link .= ' title="'.$title.'">';
        $link .= $this->title;
        $link .= '</a>';
        return $link;
    }

    public function getCoordinateAttribute(): ?string
    {
        if ($this->latitude && $this->longitude) {
            return $this->latitude.', '.$this->longitude;
        }
        return null;
    }

    public function getMapPopupContentAttribute(): string
    {
        $mapPopupContent = '';
        $mapPopupContent .= '<div class="my-2 font-weight-bold text-red-900"><strong>' . 'Nom: ' . '</strong><br>' . $this->username . '</div>';
        $mapPopupContent .= '<div class="my-2 font-weight-bold text-red-900"><strong>' . 'Commune: ' . '</strong><br>' . $this->commune . '</div>';
        $mapPopupContent .= '<div class="my-2"><stroong>
            <a href="' . route('roomsParty.show', $this->key) . '" title="' . $this->title . '">
                ' . 'Voir plus' . '
            </a>
        </stroong></div>';
        return $mapPopupContent;
    }
}
