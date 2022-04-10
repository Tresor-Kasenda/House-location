<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admins;

use App\Contracts\ReservationRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class ReservationAdminController extends Controller
{
    public function __construct(public ReservationRepositoryInterface $repository){}

    public function index(): Renderable
    {
        return view('admins.pages.reservations.index', [
            'reservations' => $this->repository->getContents()
        ]);
    }

    public function show(string $key): Renderable
    {
        return view('admins.pages.reservations.show', [
            'reservation' => $this->repository->show(key:  $key)
        ]);
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);
        return back();
    }
}
