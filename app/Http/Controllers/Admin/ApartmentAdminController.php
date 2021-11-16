<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Forms\ApartmentForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApartmementRequest;
use App\Repository\Admin\ApartmentRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class ApartmentAdminController extends Controller
{
    public function __construct(public FormBuilder $builder, public ApartmentRepository $repository){}

    public function index(): Factory|View|Application
    {
        $rooms = $this->repository->getApartments();
        return view('admins.pages.apartments.index',
            compact('rooms')
        );
    }

    public function show(string $key): Factory|View|Application
    {
        $house = $this->repository->view($key);
        return view('admins.pages.apartments.show', compact('house'));
    }

    public function create(): Factory|View|Application
    {
        $form = $this->builder->create(ApartmentForm::class, [
           'method' => 'POST',
            'url' => route('apartment.store')
        ]);
        return view('admins.pages.apartments.create', compact('form'));
    }

    public function store(ApartmementRequest $request)
    {

    }

    public function edit(string $key): Factory|View|Application
    {
        $house = $this->repository->view($key);
        $form = $this->builder->create(ApartmentForm::class, [
            'method' => 'PUT',
            'url' => route('', $house->key),
            'model' => $house
        ]);
        return view('admins.pages.apartments.create', compact('form', 'house'));
    }

    public function update(ApartmementRequest $request, string $key)
    {

    }

    public function destroy(string $key)
    {

    }
}
