<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Forms\ApartmentForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApartmentRequest;
use App\Repository\ApartmentRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class ApartmentAdminController extends Controller
{
    public function __construct(
        public FormBuilder $builder,
        public ApartmentRepository $repository
    ){}

    public function index(): Factory|View|Application
    {
        $rooms = $this->repository->getAll();
        return view('admins.pages.apartments.index', compact('rooms'));
    }

    public function show(string $key): Factory|View|Application
    {
        $room = $this->repository->getOneByKey($key);
        return view('admins.pages.apartments.show', compact('room'));
    }

    public function create(): Factory|View|Application
    {
        $form = $this->builder->create(ApartmentForm::class, [
           'method' => 'POST',
            'url' => route('apartment.store')
        ]);
        return view('admins.pages.apartments.create', compact('form'));
    }

    public function store(ApartmentRequest $request): RedirectResponse
    {
        $this->repository->create($request);
        return redirect()->route('apartment.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        $room = $this->repository->getOneByKey($key);
        $form = $this->builder->create(ApartmentForm::class, [
            'method' => 'PUT',
            'url' => route('apartment.store', $room->key),
            'model' => $room
        ]);
        return view('admins.pages.apartments.create', compact('form', 'room'));

    }

    public function update(ApartmentRequest $request, string $key): RedirectResponse
    {
        $this->repository->update($key,$request->all());
        return redirect()->route('apartment.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->moveToTrash($key);
        return redirect()->back();
    }

    public function forceDelete(string $key): RedirectResponse
    {
        $this->repository->forceDelete($key);
        return redirect()->back();
    }

    public function trashed(): Factory|View|Application
    {
        return view('admins.pages.apartments.trashed', [
            'rooms' => $this->repository->trashed()
        ]);
    }
}
