<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Contracts\UpdateUserRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\RedirectResponse;

class UpdateUserController extends Controller
{
    public function __construct(public UpdateUserRepositoryInterface $repository){}

    public function update(string $key, UpdateUserRequest $request): RedirectResponse
    {
        $this->repository->updated(key: $key, request: $request);
        return back();
    }
}
