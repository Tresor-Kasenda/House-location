<?php
declare(strict_types=1);

namespace App\Http\Controllers\Commissioners;

use App\Contracts\HomeCommissionerRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\House;
use App\Models\Reservation;
use Carbon\Carbon;
use DB;
use Illuminate\Contracts\Support\Renderable;

class HomeCommissionerController extends Controller
{
    public function __construct(public HomeCommissionerRepositoryInterface $repository){}

    public function index(): Renderable
    {
        $charts = $this->repository->getContent();

        return view('dealers.dashboard', compact('charts'));
    }
}
