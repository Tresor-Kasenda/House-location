<?php
declare(strict_types=1);

namespace App\Repository\Users;

use App\Contracts\ReservationUserRepositoryInterface;
use App\Models\Reservation;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ReservationUserRepository implements ReservationUserRepositoryInterface
{
    public function getReservations(): LengthAwarePaginator
    {
        return Reservation::query()
            ->with('house')
            ->where('user_id', '=', auth()->id())
            ->orderByDesc('created_at')
            ->paginate(6);
    }
}
