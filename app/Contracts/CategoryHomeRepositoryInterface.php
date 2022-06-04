<?php
declare(strict_types=1);

namespace App\Contracts;

use Illuminate\Http\Request;

interface CategoryHomeRepositoryInterface
{
    public function index();

    public function show(string $key);

    public function getHouseByDetails($house);
}
