<?php
declare(strict_types=1);

namespace  App\Repository\Interface;

use App\Http\Requests\ApartmementRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ApartmentRepositoryInterface
{
    public function getApartments(): Collection|array;

    public function view(string $key): Model|Builder;

    public function store(ApartmementRequest $request);
}
