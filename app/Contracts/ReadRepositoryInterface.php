<?php

declare(strict_types=1);

namespace App\Contracts;

interface ReadRepositoryInterface
{
    public function getContents();

    public function update(string $key);
}
