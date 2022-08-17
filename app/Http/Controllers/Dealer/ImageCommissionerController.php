<?php
declare(strict_types=1);

namespace App\Http\Controllers\Dealer;

use App\Contracts\DetailsHouseCommissionerRepositoryInterface;
use App\Contracts\ImageCommissionerRepositoryInterface;
use App\Forms\ImageDealerForm;
use App\Forms\ImageForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class ImageCommissionerController extends Controller
{
    public function __construct(
        public ImageCommissionerRepositoryInterface $repository,
        public FormBuilder                                 $builder
    ){}

    public function index(): Renderable
    {
        $images = $this->repository->getContents();

        return view('dealers.pages.images.index', compact('images'));
    }

    public function create(): Renderable
    {
        $form = $this->builder->create(ImageDealerForm::class, [
            'method' => 'POST',
            'url' => route('commissioner.imageHouses.store')
        ]);

        return view('dealers.pages.images.create', compact('form'));
    }

    public function store(ImageRequest $attributes): RedirectResponse
    {
        $this->repository->created(attributes: $attributes);

        return redirect()->route('commissioner.imageHouses.index');
    }

    public function edit(string $key): Renderable
    {
        $image = $this->repository->show(key: $key);

        $form = $this->builder->create(ImageDealerForm::class, [
            'method' => 'PUT',
            'url' => route('commissioner.imageHouses.update', $image->id),
            'model' => $image
        ]);

        return view('dealers.pages.images.create', compact('form', 'image'));
    }

    public function update(string $key, ImageRequest $attributes): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes);

        return redirect()->route('commissioner.imageHouses.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);

        return back();
    }
}
