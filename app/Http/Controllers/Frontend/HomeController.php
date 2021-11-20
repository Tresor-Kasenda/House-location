<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repository\ApartmentRepository;
use App\Repository\Frontend\HomeFrontendRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __construct(
        public ApartmentRepository $repository,
        public HomeFrontendRepository $frontendRepository
    ){}

    public function index(): Factory|View|Application
    {
        return view('frontends.home', [
            'apartments' => $this->repository->getAllVerified(),
            'apartmentPrices'=> $this->frontendRepository->getAllByPrices()
        ]);
    }
}
