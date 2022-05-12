<?php
declare(strict_types=1);

namespace App\Repository\Apps;

use App\Contracts\CategoryHomeRepositoryInterface;
use App\Enums\HouseEnum;
use App\Models\House;
use App\Models\Type;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CategoryRepository implements CategoryHomeRepositoryInterface
{
    public function index(?Request $request = null): LengthAwarePaginator
    {
        return House::query()
            ->orderByDesc('created_at')
            ->when('status', fn($builder) => $builder->where('status', HouseEnum::CONFIRMED))
            ->latest()
            ->paginate(6);
    }

    public function show(string $key)
    {
        $house = House::query()
            ->when('key', fn($builder) => $builder->where('key', $key))
            ->when('status', fn($builder) => $builder->where('status', HouseEnum::CONFIRMED))
            ->withCount('reservations')
            ->first();
        return $house->load(['categories','image', 'type', 'detail']);
    }

    public function getHouseByDetails($house): Collection|array
    {
        return House::query()
            ->when('status', fn($builder) => $builder->where('status', HouseEnum::CONFIRMED))
            ->when('prices', fn($builder) => $builder->where('prices', $house->prices))
            ->orWhere('commune', '=', $house->commune)
            ->get();
    }
}
