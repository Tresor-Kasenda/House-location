<?php
declare(strict_types=1);

namespace App\Repository\Apps;

use App\Contracts\ReservationHouseRepositoryInterface;
use App\Enums\HouseEnum;
use App\Models\House;
use App\Models\Reservation;
use App\Traits\RandomValues;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ReservationRepository implements ReservationHouseRepositoryInterface
{
    use RandomValues;

    public function stored($attributes): Model|Builder
    {
        $house = $this->getHouse(attributes: $attributes);

        return Reservation::query()
            ->create([
                "house_id" => $house->id,
                "name" => $attributes->input('username'),
                "address" => $attributes->input('email'),
                "phones" => $attributes->input('phoneNumber'),
                "messages" => $attributes->input("message"),
                'reference' => $this->generateRandomTransaction(6),
                'user_id' => auth()->id() ?? null
            ]);
    }

    public function getReservation(string $key): Model|Builder|null
    {
        return Reservation::query()
            ->where('key', '=', $key)
            ->first();
    }

    private function getHouse($attributes): Model|Builder|null
    {
        return House::query()
            ->where('key', '=', $attributes->input('house'))
            ->when('status', fn($builder) => $builder->where('status', HouseEnum::VALIDATED_HOUSE))
            ->first();
    }
}
