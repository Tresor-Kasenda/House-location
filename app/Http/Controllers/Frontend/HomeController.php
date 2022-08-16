<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Contracts\HomeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HouseNoteController;
use App\Http\Controllers\NoteCommissionnaireController;
use App\Http\Controllers\TemoignageController;

class HomeController extends Controller
{
    public function __construct(
        public HomeRepositoryInterface $repository
    ){}

    public function __invoke(): Renderable
    {
        return view('frontend.home', [
            'apartments' => $this->repository->getContent(),
            'sliders'=> $this->repository->getSliders(),
            'apartment_notes' => $this->repository->getHouseWithManyNotes()
        ]);
    }
}
