<?php
declare(strict_types=1);

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class AboutController extends Controller
{
    public function __invoke(): Renderable
    {
        return view('frontends.pages.about.index');
    }
}
