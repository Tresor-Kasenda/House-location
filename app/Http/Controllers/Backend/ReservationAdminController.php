<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\ReservationRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class ReservationAdminController extends Controller
{
    public function __construct(public ReservationRepositoryInterface $repository){}

    public function index(): Renderable
    {
        $reservations = $this->repository->getContents();

        return view('backend.pages.reservations.index', compact('reservations'));
    }

    public function show(string $key): Renderable
    {
        $reservation = $this->repository->show(key:  $key);

        return view('backend.pages.reservations.show', compact('reservation'));
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);

        return back();
    }
}
