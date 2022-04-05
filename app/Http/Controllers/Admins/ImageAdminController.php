<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admins;

use App\Contracts\ImageRepositoryInterface;
use App\Forms\ImageForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class ImageAdminController extends Controller
{
    public function __construct(
        public FormBuilder $builder,
        public ImageRepositoryInterface $repository
    ){}

    public function index(): Renderable
    {
        return view('admins.pages.images.index', [
            'images' => $this->repository->getContents()
        ]);
    }

    public function create(): Factory|View|Application
    {
        $form = $this->builder->create(ImageForm::class, [
            'method' => 'POST',
            'url' => route('admins.images.store')
        ]);
        return view('admins.pages.images.create', compact('form'));
    }

    public function store(ImageRequest $request): RedirectResponse
    {
        $this->repository->created(attributes: $request);
        return redirect()->route('admins.images.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        $image = $this->repository->show(key: $key);
        $form = $this->builder->create(ImageForm::class, [
            'method' => 'PUT',
            'url' => route('admins.images.update', $image->key),
            'model' => $image
        ]);
        return view('admins.pages.images.create', compact('form', 'image'));
    }

    public function update(string $key, ImageRequest $request): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $request);
        return redirect()->route('admins.images.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);
        return back();
    }
}
