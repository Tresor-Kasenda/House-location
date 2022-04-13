<?php
declare(strict_types=1);

namespace App\Http\Controllers\Commissioners;

use App\Contracts\ApartmentCommissionerRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class ApartmentCommissionerController extends Controller
{
    public function __construct(public ApartmentCommissionerRepositoryInterface $repository){}

    public function index(): Renderable
    {
        return view('dealers.pages.houses.index', [
            'houses' => $this->repository->getContents()
        ]);
    }
}
