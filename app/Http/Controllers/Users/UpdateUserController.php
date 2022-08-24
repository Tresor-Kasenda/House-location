<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Contracts\UpdateUserRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class UpdateUserController extends Controller
{
    public function __construct(public UpdateUserRepositoryInterface $repository){}

    public function __invoke(string $key, UpdateUserRequest $request): RedirectResponse
    {
        $this->repository->updated($key, $request);

        session()->flash("success", "This is success message");

        return back();
    }
}
