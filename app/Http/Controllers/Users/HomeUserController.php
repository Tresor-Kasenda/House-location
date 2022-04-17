<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Contracts\UsersProfileRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomeUserController extends Controller
{
    public function __construct(public UsersProfileRepositoryInterface $repository){}

    public function index(): Renderable
    {
        return view('users.home');
    }
}
