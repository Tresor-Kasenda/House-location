<?php

declare(strict_types=1);

namespace App\Contracts;

use App\Http\Requests\SlideRequest;

interface SlideRepositoryInterface
{
    public function getContents();

    public function show(string $key);

    public function created(SlideRequest $request);

    public function updated(string $key, SlideRequest $request);

    public function deleted(string $key);
}
