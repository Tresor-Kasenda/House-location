<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Contracts\ReservationHouseRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class ReservationController extends Controller
{
    public function __construct(public ReservationHouseRepositoryInterface $repository){}

    public function store(ReservationRequest $request): RedirectResponse
    {
        $reservation = $this->repository->stored(attributes: $request);

        return redirect()->route('reservation.show', $reservation->key);
    }

    public function show(string $key): Renderable
    {
        $reservation  = $this->repository->getReservation(key: $key);

        return view('frontend.pages.reservations.confirmed', compact('reservation'));
    }
}
