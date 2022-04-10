<?php
declare(strict_types=1);

namespace App\Http\Controllers\Commissioners;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomeCommissionerController extends Controller
{
    public function index(): Renderable
    {
        return view('');
    }
}
