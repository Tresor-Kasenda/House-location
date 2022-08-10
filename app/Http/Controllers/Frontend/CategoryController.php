<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Contracts\CategoryHomeRepositoryInterface;
use App\Contracts\HomeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class CategoryController extends Controller
{
    public function __construct(
        public CategoryHomeRepositoryInterface $repository,
        protected HomeRepositoryInterface $homeRepository,
        public FormBuilder $builder
    ){}

    public function index(): Renderable
    {
        return view('frontend.pages.category.index', [
            'apartments' => $this->repository->index(),
            'categories' => $this->repository->getHouseCategories(),
            'apartment_notes' => $this->homeRepository->getHouseWithManyNotes()
        ]);
    }

    public function show(string $key): Factory|View|Application
    {
        $apartment = $this->repository->show(key: $key);
        return view('frontend.pages.category.show', [
            'apartment' => $apartment,
            'apartments' => $this->repository->getHouseByDetails(house: $apartment)
        ]);
    }
}
