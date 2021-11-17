<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Forms\ApartmentForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApartmementRequest;
use App\Repository\Interface\ApartmentRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class ApartmentAdminController extends Controller
{
    public function __construct(public FormBuilder $builder, public ApartmentRepositoryInterface $repository){}

    public function index(): Factory|View|Application
    {
        $rooms = $this->repository->getAll();
        return view('admins.pages.apartments.index',
            compact('rooms')
        );
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

    public function store(ApartmementRequest $request)
    {
        $this->repository->create($request);
        return redirect()->route('apartment.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        $house = $this->repository->getOneByKey($key);
        $form = $this->builder->create(ApartmentForm::class, [
            'method' => 'PUT',
            'url' => route('', $house->key),
            'model' => $house
        ]);
        return view('admins.pages.apartments.create', compact('form', 'house'));
    }

    public function update(ApartmementRequest $request, string $key)
    {
        $this->repository->update($key,$request->all());
    }

    public function destroy(string $key)
    {
        $this->repository->moveToTrash($key);
        return redirect()->back();
    }

    public function forceDelete(string $key) {
        $this->repository->forceDelete($key);
        return redirect()->back();
    }
}
