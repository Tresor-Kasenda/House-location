<?php
declare(strict_types=1);

namespace App\Contracts;

interface UpdateUserRepositoryInterface
{
    public function updated(string $key, $request);
}
