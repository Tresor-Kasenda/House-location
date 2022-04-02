<?php

declare(strict_types=1);

namespace App\Contracts;


interface SoftRepositoryInterface
{
    public function forceDelete(string $key);

    public function restore(string $key) : ?bool;

    public function moveToTrash(string $key);
}
