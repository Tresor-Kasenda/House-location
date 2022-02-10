<?php
declare(strict_types=1);

namespace App\Repository\Interface;

interface WriteRepositoryInterface
{
    public function create($attributes);

    public function update(string $key, $attributes);
}
