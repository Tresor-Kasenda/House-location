<?php

declare(strict_types=1);

namespace App\Services;

class ToastService
{
    public function success(string $messages, string $type)
    {
        return toast($messages, $type);
    }

    public function errors(string $messages, string $type)
    {
        return toast($messages, $type);
    }
}
