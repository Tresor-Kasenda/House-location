<?php

declare(strict_types=1);

namespace App\Contracts;

interface CategoryRepositoryInterface extends ReadRepositoryInterface
{
    public function getContents();

    public function created($attributes);

    public function updated(string $key, $attributes);

    public function deleted(string $key);
}
