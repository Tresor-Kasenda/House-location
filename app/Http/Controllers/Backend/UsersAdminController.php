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
        return view('backend.pages.users.index', [
            'users' => $this->repository->getContents()
        ]);
    }

    public function show(string $key): Renderable
    {
        return view('backend.pages.users.show', [
            'user' => $this->repository->show(key: $key)
        ]);
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key:  $key);
        return back();
    }
}
