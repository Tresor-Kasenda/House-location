<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\TrashedRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class TrashedAdminController extends Controller
{
    public function __construct(public TrashedRepositoryInterface $repository)
    {
    }

    public function index(): Renderable
    {
        $rooms = $this->repository->trashed();

        return view('backend.domain.apartments.trashed', compact('rooms'));
    }

    public function restore(string $key): RedirectResponse
    {
        $this->repository->restore(key: $key);

        return redirect()->route('admins.houses.index');
    }

    public function delete(string $key): RedirectResponse
    {
        $this->repository->forceDelete(key: $key);

        return redirect()->route('admins.houses.index');
    }
}
