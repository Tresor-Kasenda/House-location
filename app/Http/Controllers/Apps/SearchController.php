<?php
declare(strict_types=1);

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\House;
use App\Repository\Apps\SearchFrontendRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __construct(public SearchFrontendRepository $repository){}

    public function searchHouse(Request $request): Collection|array
    {
        return House::query()
            ->where('commune', '=', $request->input('commune'))
            ->get();
    }

    public function searchLocation(Request $request): Factory|View|Application
    {
        $houses = $this->repository->search(request: $request);
        return view('apps.search')
            ->with('houses', $houses);
    }

}
