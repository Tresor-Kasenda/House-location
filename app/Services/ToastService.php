<?php

declare(strict_types=1);

namespace App\Services;

use Flasher\SweetAlert\Prime\SweetAlertFactory;

class ToastService
{
    public function __construct(public SweetAlertFactory $factory)
    {
    }

    public function success(string $messages): void
    {
        $this->factory->addFlash('success', $messages);
    }

    public function errors(string $messages): void
    {
        $this->factory->addFlash('error', $messages);
    }

    public function warning(string $message): void
    {
        $this->factory->addFlash('warning', $message);
    }

    public function info(string $message): void
    {
        $this->factory->addFlash('info', $message);
    }
}
