<?php
declare(strict_types=1);

namespace App\Repository\Interface;

interface ApartmentRepositoryInterface
{
    public function getAllVerified();

    public function getAllByCategoryId(string $categoryId);

    public function getOnlyValidatedByKey(string $id);
}
