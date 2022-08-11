<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Contracts\HomeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HouseController extends Controller
{
    public function __construct(
        protected readonly HomeRepositoryInterface $repository,
    )
    {
    }

    public function __invoke(): Renderable
    {
        $apartments = $this->repository->getContent();
        $apartment_notes = $this->repository->getHouseWithManyNotes();

        return view('frontend.pages.houses.index', compact('apartments', 'apartment_notes'));
    }

    public function show(string $key): Factory|View|Application
    {
        $apartment = $this->repository->showApartment($key);

        return view('frontend.pages.houses.show')->with('apartment', $apartment);
    }
}
