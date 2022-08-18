<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\UserRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class UsersAdminController extends Controller
{
    public function __construct(public UserRepositoryInterface $repository){}

    public function index(): Renderable
    {
        $users = $this->repository->getContents();

        return view('backend.domain.users.index', compact('users'));
    }

    public function show(string $key): Renderable
    {
        $user = $this->repository->show(key: $key);

        return view('backend.domain.users.show', compact('user'));
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key:  $key);

        return back();
    }
}
