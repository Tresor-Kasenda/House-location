<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Contracts\NewsLetterRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsLetterRequest;
use Illuminate\Http\RedirectResponse;

class NewsLetterController extends Controller
{
    public function __construct(public NewsLetterRepositoryInterface $repository){}

    public function index(NewsLetterRequest $request): RedirectResponse
    {
        $this->repository->send(request: $request);
        return back()->with('failure', 'Sorry! You have already subscribed ');
    }
}
