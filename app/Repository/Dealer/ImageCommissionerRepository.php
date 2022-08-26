<?php

declare(strict_types=1);

namespace App\Repository\Dealer;

use App\Contracts\ImageCommissionerRepositoryInterface;
use App\Models\House;
use App\Models\Image;
use App\Models\User;
use App\Services\ToastService;
use App\Traits\ImageCrud;
use App\Traits\ImageUploader;
use Illuminate\Support\Collection;

class ImageCommissionerRepository implements ImageCommissionerRepositoryInterface
{
    use ImageUploader, ImageCrud;

    public function __construct(public ToastService $service)
    {
    }

    public function getContents(): Collection
    {
        return Image::query()
            ->select([
                'images',
                'user_id',
                'house_id',
                'id'
            ])
            ->with([
                'user',
                'houses'
            ])
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
