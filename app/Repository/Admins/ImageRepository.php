<?php
declare(strict_types=1);

namespace App\Repository\Admins;

use App\Models\Image;
use App\Traits\ImageCrud;
use App\Traits\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ImageRepository implements \App\Contracts\ImageRepositoryInterface
{
    use ImageUploader, ImageCrud;


}
