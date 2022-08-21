<?php

declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Contracts\BookingUserRepositoryInterface;
use App\Contracts\UsersProfileRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomeUserController extends Controller
{
    public function __construct(public BookingUserRepositoryInterface $repository){}

    public function index(): Renderable
    {
        $reservations = $this->repository->getReservations();

        return view('users.home', compact('reservations'));
    }
}
