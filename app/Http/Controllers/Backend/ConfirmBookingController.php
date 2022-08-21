<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfirmRequest;
use App\Repository\Backend\ConfirmRepository;
use Illuminate\Http\RedirectResponse;

class ConfirmBookingController extends Controller
{

    public function __construct(protected ConfirmRepository $repository)
    {
    }

    public function confirm(string $request): RedirectResponse
    {
        $this->repository->confirmed($request);

        return back();
    }
}
