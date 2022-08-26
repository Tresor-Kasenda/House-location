<?php

declare(strict_types=1);

namespace App\Contracts;

interface SearchRepositoryInterface
{
    public function search($request);
}
