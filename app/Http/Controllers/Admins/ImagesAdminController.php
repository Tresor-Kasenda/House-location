<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admins;

use App\Contracts\ImageRepositoryInterface;
use App\Forms\ImageForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

final class ImagesAdminController extends Controller
{
    public function __construct(public ImageRepositoryInterface $repository, public FormBuilder $builder){}

    public function index(): Renderable
    {
        return view('admins.pages.images.index', [
            'images' => $this->repository->getContents()
        ]);
    }

    public function create(): Renderable
    {
        $form = $this->builder->create(ImageForm::class, [
            'method' => 'POST',
            'url' => route('admins.image.store')
        ]);
        return view('admins.pages.images.create', compact('form'));
    }

    public function store(ImageRequest $attributes): RedirectResponse
    {
        $this->repository->created(attributes: $attributes);
        return redirect()->route('admins.image.index');
    }

    public function edit(string $key): Renderable
    {
        $image = $this->repository->show(key: $key);
        $form = $this->builder->create(ImageForm::class, [
            'method' => 'PUT',
            'url' => route('admins.image.update', $image->key),
            'model' => $image
        ]);
        return view('admins.pages.images.create', compact('form', 'image'));
    }

    public function update(string $key, ImageRequest $attributes): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes);
        return redirect()->route('admins.image.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);
        return back();
    }
}