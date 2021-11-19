<?php
declare(strict_types=1);

namespace App\Repository\Frontend;

use App\Models\House;
use App\Repository\Interface\HomeRepositoryInterface;
use Illuminate\Support\Collection;

class HomeFrontendRepository implements HomeRepositoryInterface
{
    public function getAll(): Collection
    {
        return House::query()
            ->orderBy('created_at', 'DESC')
            ->when('status', fn ($builder) => $builder->where('status', House::APARTMENT_CONFIRMED))
            ->inRandomOrder()
            ->get();
    }

    public function getAllByPrices(): Collection
    {
        return House::query()
            ->where('price_per_month', '<=', 40)
            ->when('status', fn ($builder) => $builder->where('status', House::APARTMENT_CONFIRMED))
            ->limit(4)
            ->inRandomOrder()
            ->get();
    }

    public function getByLatestCreation(): Collection
    {
        return House::query()
            ->latest()
            ->limit(4)
            ->when('status', fn ($builder) => $builder->where('status', House::APARTMENT_CONFIRMED))
            ->get();
    }


    public function  getByDetail($model): \Illuminate\Database\Eloquent\Collection|array
    {
        return House::query()
            ->limit(4)
            ->inRandomOrder()
            ->when('status', fn ($builder) => $builder->where('status', House::APARTMENT_CONFIRMED))
            ->when('commune', fn ($builder) => $builder->where('commune', $model->commune))
            ->get();
    }
}
