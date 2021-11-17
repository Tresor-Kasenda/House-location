<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Forms\CategoryForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repository\Interface\CategoryRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class CategoryAdminController extends Controller
{
    public function __construct(
        public FormBuilder $builder,
        public CategoryRepositoryInterface $repository
    ){}

    public function index(): Factory|View|Application
    {
        $categories = $this->repository->getAll();
        return view('admins.pages.category.index', compact('categories'));
    }

    public function create(): Factory|View|Application
    {
        $form = $this->builder->create(CategoryForm::class, [
            'method' => 'POST',
            'url' => route('category.store')
        ]);
        return view('admins.pages.category.create', compact('form'));
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        $this->repository->create($request);
        return redirect()->route('category.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
