<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Contracts\CancellingUserRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class CancellingUserController extends Controller
{
    public function __construct(public CancellingUserRepositoryInterface $repository){}

    public function cancel(string $key): RedirectResponse
    {
        $this->repository->cancelReservation(key: $key);
        return back();
    }
}
