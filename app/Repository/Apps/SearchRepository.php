<?php
declare(strict_types=1);

namespace App\Repository\Apps;

use App\Contracts\SearchRepositoryInterface;
use App\Models\House;
use Illuminate\Database\Eloquent\Collection;

class SearchRepository implements SearchRepositoryInterface
{
    public function search($request): Collection|array
    {
        if ($request->input('_search') !== null){
            return House::query()
                ->where('prices', 'like', '%'.$request->input('_search').'%')
                ->orWhere('commune','like', '%'.$request->input('_search').'%')
                ->orWhere('address','like', '%'.$request->input('_search').'%')
                ->orWhere('district', 'like', '%'.$request->input('_search').'%')
                ->orWhere('town', 'like', '%'.$request->input('_search').'%')
                ->get();
        }
    }
}
