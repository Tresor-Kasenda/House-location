<?php

declare(strict_types=1);

namespace App\Contracts;

use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface TrashedRepositoryInterface
{
    public function trashed();

    public function restore(string $key): Model|Builder|House;

    public function forceDelete(string $key): Model|Builder;
}
