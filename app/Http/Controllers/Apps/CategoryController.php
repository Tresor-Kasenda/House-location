<?php
declare(strict_types=1);

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Repository\Admins\ApartmentRepository;
use App\Repository\Apps\HomeFrontendRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    public function __construct(
        public ApartmentRepository $repository,
        public HomeFrontendRepository $frontendRepository
    ){}

    public function index(): Renderable
    {
        return view('apps.pages.category.index', [
            'apartments' => $this->repository->getAllVerified()
        ]);
    }

    public function show(string $key): Factory|View|Application
    {
        $apartment = $this->repository->getOnlyValidatedByKey($key);
        return view('apps.pages.category.show', [
            'apartment' => $apartment,
            'apartments' => $this->frontendRepository->getByDetail($apartment)
        ]);
    }
}
