<?php

declare(strict_types=1);

namespace App\Repository\Backend;

use App\Enums\ReservationEnum;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class InactiveRepository
{
    public function inactive(string $request): Model|Builder|Reservation
    {
        $reservation = Reservation::query()
            ->where('id', '=', $request)
            ->firstOrFail();
        $reservation->update([
            'status' => ReservationEnum::INVALIDATED_RESERVATION,
        ]);

        return $reservation;
    }
}
