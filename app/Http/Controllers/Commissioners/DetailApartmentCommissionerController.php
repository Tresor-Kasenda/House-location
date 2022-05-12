<?php
declare(strict_types=1);

namespace App\Http\Controllers\Commissioners;

use App\Contracts\DetailsHouseCommissionerRepositoryInterface;
use App\Forms\DetailHouseCommissionnerForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\DetailHouseRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class DetailApartmentCommissionerController extends Controller
{
    public function __construct(
        public DetailsHouseCommissionerRepositoryInterface $repository,
        public FormBuilder                                 $builder
    ){}

    public function index(): Renderable
    {
        return view('dealers.pages.detail.index', [
            'details' => $this->repository->getContents()
        ]);
    }

    public function create(): Renderable
    {
        $form = $this->builder->create(DetailHouseCommissionnerForm::class, [
            'method' => 'POST',
            'url' => route('commissioner.details.store')
        ]);
        return view('dealers.pages.detail.create', compact('form'));
    }

    public function store(DetailHouseRequest $attributes): RedirectResponse
    {
        $this->repository->created(attributes: $attributes);
        return redirect()->route('commissioner.details.index');
    }

    public function edit(string $key): Renderable
    {
        $image = $this->repository->show(key: $key);
        $form = $this->builder->create(DetailHouseCommissionnerForm::class, [
            'method' => 'PUT',
            'url' => route('commissioner.details.update', $image->key),
            'model' => $image
        ]);
        return view('dealers.pages.detail.create', compact('form', 'image'));
    }

    public function update(string $key, DetailHouseRequest $attributes): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes);
        return redirect()->route('commissioner.details.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);
        return back();
    }
}
