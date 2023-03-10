<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dealer;

use App\Contracts\HomeCommissionerRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomeCommissionerController extends Controller
{
    public function __construct(public HomeCommissionerRepositoryInterface $repository)
    {
    }

    public function index(): Renderable
    {
        $charts = $this->repository->getContent();

        return view('dealers.dashboard', compact('charts'));
    }
}
