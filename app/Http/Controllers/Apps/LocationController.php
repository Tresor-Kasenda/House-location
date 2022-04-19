<?php
declare(strict_types=1);

namespace App\Http\Controllers\Apps;

use App\Contracts\ApartmentRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class LocationController extends Controller
{
    public function __construct(public ApartmentRepositoryInterface $repository){}

    public function __invoke(): Renderable
    {
        return view('apps.pages.maps.index',[
            'apartments' => $this->repository->getContents()
        ]);
    }
}
