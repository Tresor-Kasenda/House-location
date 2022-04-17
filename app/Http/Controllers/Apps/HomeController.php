<?php
declare(strict_types=1);

namespace App\Http\Controllers\Apps;

use App\Contracts\HomeRepositoryInterface;
use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function __construct(
        public HomeRepositoryInterface $repository
    ){}

    public array $cards = [
      'relative lg:col-span-6 md:col-span-8 col-span-4 row-span-4 lg:h-[31rem] md:h-[25rem] group transition',
      'relative lg:col-span-3 md:col-span-4 col-span-4 row-span-2 lg:h-60 group transition',
      'relative lg:col-span-3 md:col-span-4 col-span-4 row-span-2 lg:h-60 group transition',
      'relative lg:col-span-4 md:col-span-7 col-span-5 row-span-2 lg:h-60 group transition',
      'relative lg:col-span-2 md:col-span-5 col-span-3 row-span-2 lg:h-60 group transition'
    ];

    public function __invoke(): Renderable
    {
        return view('apps.home', [
            'apartments' => $this->repository->getContent(),
            'cards' => $this->cards
        ]);
    }
}
