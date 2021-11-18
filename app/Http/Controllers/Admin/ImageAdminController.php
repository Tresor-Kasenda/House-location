<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Forms\ImageForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Repository\ImageRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class ImageAdminController extends Controller
{
    public function __construct(
        public FormBuilder $builder,
        public ImageRepository $repository
    ){}

    public function index(): Factory|View|Application
    {
        $images = $this->repository->getAll();
        return view('admins.pages.images.index', compact('images'));
    }

    public function create(): Factory|View|Application
    {
        $form = $this->builder->create(ImageForm::class, [
            'method' => 'POST',
            'url' => route('images.store')
        ]);
        return view('admins.pages.images.create', compact('form'));
    }

    public function store(ImageRequest $request): RedirectResponse
    {
        $this->repository->create($request);
        return redirect()->route('images.index');
    }


    public function edit(string $key): Factory|View|Application
    {
        $image = $this->repository->getOneByKey($key);
        $form = $this->builder->create(ImageForm::class, [
            'method' => 'PUT',
            'url' => route('images.update', $image->key),
            'model' => $image
        ]);
        return view('admins.pages.images.create', compact('form', 'image'));
    }

    public function update(string $key, ImageRequest $request): RedirectResponse
    {
        $this->repository->update($key, $request);
        return redirect()->route('images.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->forceDelete($key);
        return redirect()->route('images.index');
    }
}
