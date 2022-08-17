<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Contracts\CategoryHomeRepositoryInterface;
use App\Contracts\HomeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(
        protected readonly CategoryHomeRepositoryInterface $repository,
        protected readonly HomeRepositoryInterface $homeRepository,
    ){}

    public function index(Request $request): Renderable
    {
        return view('frontend.domain.category.index', [
            'apartments' => $this->repository->index($request),
            'categories' => $this->repository->getHouseCategories(),
            'apartment_notes' => $this->homeRepository->getHouseWithManyNotes()
        ]);
    }
}
