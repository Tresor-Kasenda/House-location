<?php
declare(strict_types=1);

namespace App\Repository\Apps;

use App\Models\House;
use Illuminate\Database\Eloquent\Collection;

class SearchFrontendRepository
{
    public function search($request): Collection|array
    {
        return House::query()
            ->where('district', 'LIKE', "%". $request->query('Quartier') ."%")
            ->where('commune', 'LIKE', "%". $request->query('Commune') ."%")
            ->where('roomNumber', 'LIKE', "%". $request->query('pièces') ."%")
            ->get();
    }
}
