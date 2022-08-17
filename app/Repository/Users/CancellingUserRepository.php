<?php
declare(strict_types=1);

namespace App\Repository\Users;

use App\Contracts\CancellingUserRepositoryInterface;
use App\Models\Reservation;

class CancellingUserRepository implements CancellingUserRepositoryInterface
{
    public function cancelReservation(string $key)
    {
        $reservation = Reservation::query()
            ->when('id', function ($query) use ($key){
                $query->where('id', $key);
            })
            ->when('user_id', function ($query) use ($key){
                $query->where('user_id', auth()->id());
            })
            ->first();
        $reservation->delete();
        return $reservation;
    }
}
