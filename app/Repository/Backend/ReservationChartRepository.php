<?php

declare(strict_types=1);

namespace App\Repository\Backend;

use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class ReservationChartRepository
{
    public function getReservationPerDays(): Collection|array
    {
        return Reservation::query()
            ->whereDate('created_at', Carbon::today())
            ->get();
    }

    public function getReservationPerWeek()
    {
        return Reservation::select(
            \DB::raw("COUNT(*) as count"),
            \DB::raw("DAYNAME(created_at) as day_name"),
            \DB::raw("DAY(created_at) as day")
        )
            ->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name','day')
            ->orderBy('day')
            ->get();
    }
}
