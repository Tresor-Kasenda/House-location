<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\SlideRepositoryInterface;
use App\Forms\SlideForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class SlideAdminController extends Controller
{
    public function __construct(
        public FormBuilder $builder,
        public SlideRepositoryInterface $repository
    ){}

    public function index(): Renderable
    {
        $sliders = $this->repository->getContents();

        return view('backend.domain.slides.index', compact('sliders'));
    }

    public function create(): Factory|View|Application
    {
        $form = $this->builder->create(SlideForm::class, [
            'method' => 'POST',
            'url' => route('admins.slides.store')
        ]);

        return view('backend.domain.slides.create', compact('form'));
    }

    public function store(SlideRequest $request): RedirectResponse
    {
        $this->repository->created(request: $request);

        return redirect()->route('admins.slides.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        $slide = $this->repository->show(key: $key);

        $form = $this->builder->create(SlideForm::class, [
            'method' => 'PUT',
            'url' => route('admins.slides.update', $slide->id),
            'model' => $slide
        ]);

        return view('backend.domain.slides.create', compact('form', 'slide'));
    }

    public function update(SlideRequest $request, string $key): RedirectResponse
    {
        $this->repository->updated(key: $key,request: $request);

        return redirect()->route('admins.slides.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted($key);

        return back();
    }
}
