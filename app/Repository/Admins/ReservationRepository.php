<?php

declare(strict_types=1);

namespace App\Repository\Admins;

use App\Contracts\ReservationRepositoryInterface;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ReservationRepository implements ReservationRepositoryInterface
{
    public function getContents(): Collection|array
    {
        return Reservation::query()
            ->select([
                'key',
                'house_id',
                'user_id',
                'name',
                'address',
                'phones',
                'transaction_code',
                'status'
            ])
            ->with('house:id,prices,guarantees,commune,town,reference, images')
            ->get();
    }

    public function show(string $key): Model|Builder|null
    {
        $user = $this->getReservation(key: $key);
        return $user->load('house');
    }

    public function deleted(string $key): Model|Builder|null
    {
        $user = $this->getReservation(key: $key);
        $user->delete();
        toast("Reservation deleted", 'success');
        return $user;
    }

    private function getReservation(string $key): null|Builder|Model
    {
        return Reservation::query()
            ->select([
                'key',
                'house_id',
                'user_id',
                'name',
                'address',
                'phones',
                'transaction_code',
                'status',
                'messages'
            ])
            ->where('key', '=', $key)
            ->first();
    }
}
