<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Forms\ImageForm;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class ImageAdminController extends Controller
{
    public function __construct(public FormBuilder $builder){}

    public function create(): Factory|View|Application
    {
        $form = $this->builder->create(ImageForm::class, [
            'method' => 'POST',
            'url' => route('')
        ]);
        return view('admins.pages.images.create', compact('form'));
    }

    public function destroy(string $key)
    {

    }
}
