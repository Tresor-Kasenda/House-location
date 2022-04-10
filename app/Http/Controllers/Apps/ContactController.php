<?php
declare(strict_types=1);

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class ContactController extends Controller
{
    public function index(): Renderable
    {
        return view('apps.pages.contacts.index');
    }
}
