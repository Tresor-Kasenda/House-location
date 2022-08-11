<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Contracts\CategoryHomeRepositoryInterface;
use App\Contracts\HomeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class CategoryController extends Controller
{
    public function __construct(
        protected readonly CategoryHomeRepositoryInterface $repository,
        protected readonly HomeRepositoryInterface $homeRepository,
    ){}

    public function index(): Renderable
    {
        return view('frontend.pages.category.index', [
            'apartments' => $this->repository->index(),
            'categories' => $this->repository->getHouseCategories(),
            'apartment_notes' => $this->homeRepository->getHouseWithManyNotes()
        ]);
    }
}
