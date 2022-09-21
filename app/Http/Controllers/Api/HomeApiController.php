<?php

namespace App\Http\Controllers\Api;

use App\Contracts\HomeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeApiController extends Controller
{
    public function __construct(
        public HomeRepositoryInterface $repository,
    ) {
    }

    public function home()
    {
        return json_encode([
            'apartments' => $this->repository->getContent(),
            'sliders' => $this->repository->getSliders(),
        ]);
    }

    public function details_homes(Request $request){
        return json_encode(
            \App\Models\House::query()
                ->where('id', '=', $request->id)
                ->withCount(['reservations' => function($builder) {
                    $builder->where('status', false);
                }])
                ->firstOrFail()
        );
    }
}
