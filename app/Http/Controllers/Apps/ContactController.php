<?php
declare(strict_types=1);

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): Renderable
    {
        return view('apps.pages.contacts.index');
    }

    public function store(ContactRequest $request)
    {
        dd($request->all());
    }
}
