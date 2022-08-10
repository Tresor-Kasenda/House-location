<?php
declare(strict_types=1);

namespace App\Repository\Apps;

use App\Contracts\HomeRepositoryInterface;
use App\Enums\HouseEnum;
use App\Models\House;
use App\Models\HouseNote;
use App\Models\Slider;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class HomeFrontendRepository implements HomeRepositoryInterface
{
    public function getContent(): Collection|array
    {
        return House::query()
            ->orderByDesc('created_at')
            ->when('status',
                fn($builder) =>
                $builder->where('status', HouseEnum::VALIDATED_HOUSE)
            )
            ->with(['type', 'detail', 'categories'])
            ->inRandomOrder()
            ->limit(4)
            ->get();
    }

    public function getSliders(): Collection|array
    {
        return Slider::query()
            ->select([
                'id',
                'key',
                'title',
                'images',
                'description'
            ])
            ->orderByDesc('created_at')
            ->get();
    }

    public function getHouseWithManyNotes(): array|Collection
    {
        return HouseNote::query()
            ->where('note', '>', 3)
            ->with('house', function ($query) {
                $query
                    ->where('status', HouseEnum::VALIDATED_HOUSE);
            })
            ->orderByDesc('created_at')
            ->get();
    }
}
