<?php

declare(strict_types=1);

namespace App\Repository\Backend;

use App\Enums\ReservationEnum;
use App\Jobs\ConfirmedReservationJob;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ConfirmRepository
{
    public function confirmed(string $request): Model|Builder|Reservation
    {
        $reservation = Reservation::query()
            ->where('id', '=', $request)
            ->firstOrFail();
        $reservation->update([
            'status' => ReservationEnum::CONFIRMED_RESERVATION
        ]);
        dispatch(new ConfirmedReservationJob($reservation))->delay(now()->addSecond(15));
        return $reservation;
    }
}
