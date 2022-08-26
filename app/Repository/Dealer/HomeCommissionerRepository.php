<?php

declare(strict_types=1);

namespace App\Repository\Dealer;

use App\Contracts\HomeCommissionerRepositoryInterface;
use App\Models\House;
use App\Models\Reservation;
use Carbon\Carbon;
use DB;

class HomeCommissionerRepository implements HomeCommissionerRepositoryInterface
{
    public function getContent()
    {
        $house = House::query()
            ->where('user_id', '=', auth()->id())
            ->first();
        if ($house) {
            $items = Reservation::select([
                DB::raw('COUNT(*) as count'),
                DB::raw('DAYNAME(created_at) as day_name'),
                DB::raw('DAY(created_at) as day'),
            ])
                ->where('created_at', '>', Carbon::today()->subDay(6))
                ->where('house_id', '=', $house->id)
                ->groupBy('day_name', 'day')
                ->orderBy('day')
                ->get();

            $data = [];

            foreach ($items as $row) {
                $data['label'][] = $row->day_name;
                $data['data'][] = (int) $row->count;
            }

            $data['chart_data'] = json_encode($data);

            return $data;
        }
    }
}
