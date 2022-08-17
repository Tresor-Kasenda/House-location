<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class AboutController extends Controller
{
    public function __invoke(): Renderable
    {
        return view('frontend.domain.about.index');
    }
}
