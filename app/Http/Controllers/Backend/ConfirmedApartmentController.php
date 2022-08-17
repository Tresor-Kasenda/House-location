<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\ActiveApartmentRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ConfirmedApartmentController extends Controller
{
    public function __construct(public ActiveApartmentRepositoryInterface $repository){}

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
}
