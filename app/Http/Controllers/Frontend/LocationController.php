<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repository\ApartmentRepository;
use Illuminate\Contracts\Support\Renderable;

class LocationController extends Controller
{
    public function __construct(public ApartmentRepository $repository){}

    public function __invoke(): Renderable
    {
        return view('frontends.pages.maps.index',[
            'apartments' => $this->repository->getAllVerified()
        ]);
    }
}
