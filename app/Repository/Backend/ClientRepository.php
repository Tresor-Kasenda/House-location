<?php

declare(strict_types=1);

namespace App\Repository\Backend;

use App\Contracts\ClientRepositoryInterface;
use App\Enums\ReservationEnum;
use App\Models\Client;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ClientRepository implements ClientRepositoryInterface
{
    public function getReservationForClients(): Collection|array
    {
        return Client::query()
            ->select([
                'id',
                'name',
                'last_name',
                'phones_number',
                'email',
            ])
            ->with(['reservation' => function ($builder) {
                $builder->where('status', ReservationEnum::CONFIRMED_RESERVATION);
            }, 'transaction'])
            ->get();
    }

    public function showReservationForClient(int $key): Model|Builder
    {
        $client = Client::query()
            ->select([
                'id',
                'name',
                'last_name',
                'phones_number',
                'email',
                'address',
            ])
            ->where('id', '=', $key)
            ->firstOrFail();

        return $client->load([
            'reservation' => [
                'house',
            ],
            'transactions',
        ]);
    }
}
