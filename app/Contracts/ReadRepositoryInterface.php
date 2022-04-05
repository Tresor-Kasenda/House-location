<?php

declare(strict_types=1);

namespace App\Contracts;

interface ReadRepositoryInterface
{
    public function getElementByKey(string $key);
}
