<?php

declare(strict_types=1);

namespace App\Repository\Admins;

use App\Enums\ReservationEnum;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class InactiveRepository
{
    public function inactive(string $request): Model|Builder|Reservation
    {
        $reservation = Reservation::query()
            ->where('key', '=', $request)
            ->firstOrFail();
        $reservation->update([
            'status' => ReservationEnum::INVALIDATED_RESERVATION
        ]);
        toast("Cette appartement a ete invalider", 'success');
        return $reservation;
    }
}
