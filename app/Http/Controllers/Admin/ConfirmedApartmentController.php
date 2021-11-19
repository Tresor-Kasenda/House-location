<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\ActiveApartmentRepository;
use Illuminate\Http\RedirectResponse;

class ConfirmedApartmentController extends Controller
{
    public function __construct(public ActiveApartmentRepository $repository){}

    public function active(string $key): RedirectResponse
    {
        $this->repository->confirmedRoom($key);
        return back();
    }

    public function inactive(string $key): RedirectResponse
    {
        $this->repository->invalidateRoom($key);
        return back();
    }

    public function reactivate(string $key): RedirectResponse
    {
        $this->repository->restore($key);
        return redirect()->back();
    }

    public function forceDelete(string $key): RedirectResponse
    {
        $this->repository->forceDelete($key);
        return redirect()->back();
    }
}
