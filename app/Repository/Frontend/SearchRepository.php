<?php

declare(strict_types=1);

namespace App\Repository\Frontend;

use App\Contracts\SearchRepositoryInterface;
use App\Enums\HouseEnum;
use App\Models\House;
use Illuminate\Database\Eloquent\Collection;

class SearchRepository implements SearchRepositoryInterface
{
    public function search($request): Collection|array|null
    {
        if ($request->input('_search') !== null) {
            return House::query()
                ->where('status', '=', HouseEnum::VALIDATED_HOUSE)
                ->where('prices', 'like', '%'.$request->input('_search').'%')
                ->orWhere('commune', 'like', '%'.$request->input('_search').'%')
                ->orWhere('address', 'like', '%'.$request->input('_search').'%')
                ->orWhere('district', 'like', '%'.$request->input('_search').'%')
                ->orWhere('town', 'like', '%'.$request->input('_search').'%')
                ->orWhere('reference', 'like', '%'.$request->input('_search').'%')
                ->get();
        }

        return null;
    }
}
