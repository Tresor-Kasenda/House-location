<?php
declare(strict_types=1);

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Repository\ApartmentRepository;
use App\Repository\Apps\HomeFrontendRepository;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function __construct(
        public ApartmentRepository $repository,
        public HomeFrontendRepository $frontendRepository
    ){}

    public function __invoke(): Renderable
    {
        return view('frontends.home', [
            'apartments' => $this->repository->getAllVerified(),
            'apartmentPrices'=> $this->frontendRepository->getAllByPrices()
        ]);
    }
}
