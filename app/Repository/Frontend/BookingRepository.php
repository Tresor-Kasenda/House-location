<?php

declare(strict_types=1);

namespace App\Repository\Frontend;

use App\Contracts\BookingHouseRepositoryInterface;
use App\Enums\HouseEnum;
use App\Enums\ReservationEnum;
use App\Jobs\ReservationJob;
use App\Mail\ReservationEmail;
use App\Models\House;
use App\Models\Reservation;
use App\Notifications\ReservationNotification;
use App\Traits\RandomValues;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class BookingRepository implements BookingHouseRepositoryInterface
{
    use RandomValues;

    public function stored($attributes): Model|Builder
    {
        $house = $this->getHouse(attributes: $attributes);

        $reservation = Reservation::query()
            ->create([
                "house_id" => $house->id,
                'user_id' => auth()->id() ?? null,
                'status' => ReservationEnum::PENDING_RESERVATION,
                "name" => $attributes->input('username'),
                "address" => $attributes->input('email'),
                "phones" => $attributes->input('phone_number'),
                "messages" => $attributes->input("messages"),
                'transaction_code' => $this->generateRandomTransaction(6)
            ]);

        dispatch(new ReservationJob($reservation))->delay(now()->addSecond(10));

        return $reservation;
    }

    public function getReservation(string $key): Model|Builder|null
    {
        return Reservation::query()
            ->select([
                'house_id',
                'id',
                'messages',
                'client_id'
            ])
            ->where('id', '=', $key)
            ->first();
    }

    private function getHouse($attributes): Model|Builder|null
    {
        return House::query()
            ->select([
                'id',
                'prices'
            ])
            ->where('id', '=', $attributes->input('apartment'))
            ->when('status',
                fn($builder) =>
                $builder->where('status', HouseEnum::VALIDATED_HOUSE)
            )
            ->first();
    }
}
