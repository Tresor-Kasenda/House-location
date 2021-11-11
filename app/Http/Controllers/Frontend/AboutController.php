<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('frontends.pages.about.index');
    }
}
