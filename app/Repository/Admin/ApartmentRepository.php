<?php
declare(strict_types=1);

namespace App\Repository\Admin;

use App\Models\House;
use App\Repository\Interface\ApartmentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ApartmentRepository implements ApartmentRepositoryInterface
{
    public function getApartments(): Collection|array
    {
        return House::query()
            ->with('images')
            ->when('status',
                fn($builder) => $builder->where('status', House::APARTMENT_CONFIRMED)
            )
            ->orderBy('created_at', 'DESC')
            ->get();
    }
}
