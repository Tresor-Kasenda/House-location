<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchHouse(Request $request): Collection|array
    {
        return House::query()
            ->where('commune', '=', $request->input('commune'))
            ->get();
    }
}
