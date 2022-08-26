<?php

declare(strict_types=1);

namespace App\Repository\Users;

use App\Contracts\BookingUserRepositoryInterface;
use App\Models\Reservation;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class BookingUserRepository implements BookingUserRepositoryInterface
{
    public function getReservations(): LengthAwarePaginator
    {
        return Reservation::query()
            ->select([
                'id',
                'client_id',
                'user_id',
                'house_id',
                'status',
            ])
            ->with([
                'house',
                'transaction',
            ])
            ->where('user_id', '=', auth()->id())
            ->orderByDesc('created_at')
            ->paginate(6);
    }
}
