<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repository\Backend\ReservationChartRepository;
use Illuminate\Contracts\Support\Renderable;

class HomeAdminController extends Controller
{
    public function __construct(protected ReservationChartRepository $repository)
    {
    }

    public function index(): Renderable
    {
        $data = [];

        foreach($this->repository->getReservationPerWeek() as $row) {
            $data['label'][] = $row->day_name;
            $data['data'][] = (int) $row->count;
        }

        $data['chart_data'] = json_encode($data);
        return view('backend.dashboard', compact('data'));
    }
}
