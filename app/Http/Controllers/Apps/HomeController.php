<?php
declare(strict_types=1);

namespace App\Http\Controllers\Apps;

use App\Contracts\HomeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function __construct(
        public HomeRepositoryInterface $repository
    ){}

    public function __invoke(): Renderable
    {
        return view('apps.home', [
            'apartments' => $this->repository->getContent(),
            'apartmentPrices'=> $this->repository->getAllByPrices()
        ]);
    }
}
