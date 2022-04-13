<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomeUserController extends Controller
{
    public function index(): Renderable
    {
        return view('');
    }
}
