<?php
declare(strict_types=1);

namespace App\Repository\Commissioners;

use App\Contracts\ImageCommissionerRepositoryInterface;
use App\Traits\ImageCrud;
use App\Traits\ImageUploader;

class ImageCommissionerRepository implements ImageCommissionerRepositoryInterface
{
    use ImageUploader, ImageCrud;

}
