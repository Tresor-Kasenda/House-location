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
            ->inRandomOrder()
            ->limit(4)
            ->get();
    }
}
