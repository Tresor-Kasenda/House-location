<?php
declare(strict_types=1);

namespace App\Repository\Apps;

use App\Contracts\HomeRepositoryInterface;
use App\Enums\HouseEnum;
use App\Models\House;
use Illuminate\Database\Eloquent\Collection;

class HomeFrontendRepository implements HomeRepositoryInterface
{
    public function getContent(): Collection|array
    {
        return House::query()
            ->orderByDesc('created_at')
            ->when('status', fn($builder) => $builder->where('status', HouseEnum::CONFIRMED))
            ->get();
    }

    public function getAllByPrices(int|null $prices = 40): Collection
    {
        return House::query()
            ->where('prices', '<=', $prices)
            ->when('status', fn ($builder) => $builder->where('status', HouseEnum::CONFIRMED))
            ->limit(4)
            ->inRandomOrder()
            ->get();
    }
}
