<?php
declare(strict_types=1);

namespace App\Http\Controllers\Commissioners;

use App\Contracts\ImageCommissionerRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class ImageCommissionerController extends Controller
{
    public function __construct(public ImageCommissionerRepositoryInterface $repository){}

    public function index(): Renderable
    {
        return view('dealers.pages.images.index', [
            'images' => $this->repository->getContents()
        ]);
    }
}
