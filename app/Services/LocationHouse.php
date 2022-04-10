<?php
declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class LocationHouse
{
    public static function getLocation($request)
    {
        if (config('app.env') === 'production'){
            $userIp = $request;
            return Location::get($userIp);
        }
    }
}
