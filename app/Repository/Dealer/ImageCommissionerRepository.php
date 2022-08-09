<?php
declare(strict_types=1);

namespace App\Repository\Dealer;

use App\Contracts\DetailsHouseCommissionerRepositoryInterface;
use App\Contracts\ImageCommissionerRepositoryInterface;
use App\Models\Image;
use App\Traits\ImageCrud;
use App\Traits\ImageUploader;
use Illuminate\Support\Collection;

class ImageCommissionerRepository implements ImageCommissionerRepositoryInterface
{
    use ImageUploader, ImageCrud;

    public function getContents(): Collection
    {
        return Image::getImagesHouse();
    }
}
