<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admins;

use App\Contracts\TrashedRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class TrashedAdminController extends Controller
{
    public function __construct(public TrashedRepositoryInterface $repository){}

    public function index(): Renderable
    {
        return view('admins.pages.apartments.trashed', [
            'houses' => $this->repository->trashed()
        ]);
    }
}
