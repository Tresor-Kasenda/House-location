<?php

declare(strict_types=1);

namespace App\Contracts;

interface WriteRepositoryInterface
{
    public function create($attributes);

    public function update(string $key, $attributes);
}
