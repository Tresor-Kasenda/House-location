<?php
declare(strict_types=1);

namespace App\Contracts;

interface HomeRepositoryInterface
{
    public function getContent();

    public function getAllByPrices();
}
