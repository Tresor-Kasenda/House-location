<?php
declare(strict_types=1);

namespace App\Repository\Commissioners;

use App\Contracts\DetailsHouseCommissionerRepositoryInterface;
use App\Traits\DetailsCrudTrait;

class DetailHouseCommissionerRepository implements DetailsHouseCommissionerRepositoryInterface
{
    use DetailsCrudTrait;
}
