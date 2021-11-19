<?php
declare(strict_types=1);

namespace App\Repository\Interface;

use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface HomeRepositoryInterface
{
    public function getAll(): Collection;

    public function getAllByPrices(): Collection;

    public function getByLatestCreation(): Collection;
}
