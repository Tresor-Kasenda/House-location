<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Contracts\HomeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HouseController extends Controller
{
    public function __construct(
        protected readonly HomeRepositoryInterface $repository
    )
    {
    }

    public function __invoke(): Renderable
    {
        $apartments = $this->repository->getContent();

        return view('frontend.pages.houses.index')->with('apartments', $apartments);
    }
}
