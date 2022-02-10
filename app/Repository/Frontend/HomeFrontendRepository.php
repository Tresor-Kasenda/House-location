<?php
declare(strict_types=1);

namespace App\Repository\Frontend;

use App\Enums\HouseEnum;
use App\Models\House;
use Illuminate\Support\Collection;

class HomeFrontendRepository
{
    public function getAll(): Collection
    {
        return House::query()
            ->orderBy('created_at', 'DESC')
            ->when('status', fn ($builder) => $builder->where('status', HouseEnum::CONFIRM))
            ->inRandomOrder()
            ->get();
    }

    public function getAllByPrices(): Collection
    {
        return House::query()
            ->where('price_per_month', '<=', 40)
            ->when('status', fn ($builder) => $builder->where('status', HouseEnum::CONFIRM))
            ->limit(4)
            ->inRandomOrder()
            ->get();
    }

    public function getByLatestCreation(): Collection
    {
        return House::query()
            ->latest()
            ->limit(4)
            ->when('status', fn ($builder) => $builder->where('status', HouseEnum::CONFIRM))
            ->get();
    }


    public function  getByDetail($model): \Illuminate\Database\Eloquent\Collection|array
    {
        return House::query()
            ->limit(4)
            ->inRandomOrder()
            ->when('status', fn ($builder) => $builder->where('status', HouseEnum::CONFIRM))
            ->when('commune', fn ($builder) => $builder->where('commune', $model->commune))
            ->get();
    }
}
