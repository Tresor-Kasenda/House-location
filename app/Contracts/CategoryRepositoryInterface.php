<?php
declare(strict_types=1);

namespace App\Contracts;

interface CategoryRepositoryInterface
{
    public function getContents();

    public function show(string $key);

    public function created($attributes);

    public function updated(string $key, $attributes);

    public function deleted(string $eky);
}
