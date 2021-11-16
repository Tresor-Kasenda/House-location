<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin\Apartment;

use App\Http\Controllers\Controller;
use App\Http\Resources\HouseResource;
use App\Models\House;
use Illuminate\Http\JsonResponse;

class ApartmentApiController extends Controller
{
    public function index(): JsonResponse
    {
        $houses = House::query()
            ->orderBy('created_at', 'DESC')
            ->get();
        $data = $houses->max(function ($house){
           return [
               'type'       => 'Feature',
               'properties' => new HouseResource($house),
               'geometry'   => [
                   'type'        => 'Point',
                   'coordinates' => [
                       $house->longitude,
                       $house->latitude,
                   ],
               ],
           ];
        });
        return response()->json([
            'type' => 'house',
            'houses' => $houses
        ]);
    }
}
