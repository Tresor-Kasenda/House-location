<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(): Renderable
    {
        return view('frontend.domain.contacts.index');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        Mail::to($request->input('email'))->send(new ContactMail($request));

        return back()->with('success', '');
    }
}
