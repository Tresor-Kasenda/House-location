<?php
declare(strict_types=1);

namespace App\Repository\Commissioners;

use App\Contracts\ApartmentCommissionerRepositoryInterface;
use App\Traits\ImageUploader;
use App\Traits\RandomValues;

class ApartmentCommissionerRepository implements ApartmentCommissionerRepositoryInterface
{
    use ImageUploader, RandomValues;

    public function getContents()
    {
        // TODO: Implement getContents() method.
    }

    public function show(string $key)
    {
        // TODO: Implement show() method.
    }

    public function created($attributes)
    {
        // TODO: Implement created() method.
    }

    public function updated(string $key, $attributes)
    {
        // TODO: Implement updated() method.
    }

    public function deleted(string $key)
    {
        // TODO: Implement deleted() method.
    }
}
