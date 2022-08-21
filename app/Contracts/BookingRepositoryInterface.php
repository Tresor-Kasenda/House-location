<?php
declare(strict_types=1);

namespace App\Contracts;

interface BookingRepositoryInterface
{
    public function getContents();

    public function show(string $key);

    public function deleted(string $key);
}
