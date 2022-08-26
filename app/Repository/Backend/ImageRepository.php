<?php

declare(strict_types=1);

namespace App\Repository\Backend;

use App\Contracts\ImageRepositoryInterface;
use App\Services\ToastService;
use App\Traits\ImageCrud;
use App\Traits\ImageUploader;

class ImageRepository implements ImageRepositoryInterface
{
    use ImageUploader, ImageCrud;

    public function __construct(protected ToastService $service)
    {
    }
}
