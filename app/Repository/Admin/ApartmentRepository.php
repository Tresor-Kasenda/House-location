<?php
declare(strict_types=1);

namespace App\Repository\Admin;

use App\Http\Requests\ApartmementRequest;
use App\Models\House;
use App\Repository\Interface\ApartmentRepositoryInterface;
use App\Services\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ApartmentRepository implements ApartmentRepositoryInterface
{
    use ImageUploader;

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

    public function view(string $key): Model|Builder
    {
        return House::query()
            ->where('key', '=', $key)
            ->where('status', '=', House::APARTMENT_CONFIRMED)
            ->firstOrFail();
    }

    public function store(ApartmementRequest $request)
    {

    }
}
