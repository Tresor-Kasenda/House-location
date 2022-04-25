<?php
declare(strict_types=1);

namespace App\Repository\Admins;

use App\Contracts\ImageRepositoryInterface;
use App\Traits\ImageCrud;
use App\Traits\ImageUploader;

class ImageRepository implements ImageRepositoryInterface
{
    use ImageUploader, ImageCrud;
}
