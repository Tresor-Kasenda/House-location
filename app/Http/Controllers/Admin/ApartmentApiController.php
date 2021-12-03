<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\HouseResource;
use App\Models\House;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApartmentApiController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $outlets = House::all();

        $geoJSOData = $outlets->map(function ($outlet) {
            return [
                'type'       => 'Feature',
                'properties' => new HouseResource($outlet),
                'geometry'   => [
                    'type'        => 'Point',
                    'coordinates' => [
                        $outlet->longitude,
                        $outlet->latitude,
                    ],
                ],
            ];
        });

        return response()->json([
            'type'     => 'FeatureCollection',
            'features' => $geoJSOData,
        ]);
    }
}
