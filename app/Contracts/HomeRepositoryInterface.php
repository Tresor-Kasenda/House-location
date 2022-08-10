<?php
declare(strict_types=1);

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface HomeRepositoryInterface
{
    public function getContent();

    public function getSliders(): Collection|array;

    public function getHouseWithManyNotes(): array|Collection;
}
