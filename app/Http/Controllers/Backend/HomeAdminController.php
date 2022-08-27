<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repository\Backend\BookingChartRepository;
use Illuminate\Contracts\Support\Renderable;

class HomeAdminController extends Controller
{
    public function __construct(protected BookingChartRepository $repository)
    {
    }

    public function index(): Renderable
    {
        $confirmedReservation = $this->repository->getBookingConfirmed();
        $unconfirmedReservation = $this->repository->getBookingUnConfirmed();

        return view('backend.dashboard', compact('confirmedReservation', 'unconfirmedReservation'));
    }
}
