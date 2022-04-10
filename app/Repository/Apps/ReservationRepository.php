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

    public function stored($attributes)
    {
        $house = $this->getHouse(attributes: $attributes);

        return Reservation::query()
            ->create([
                "house_id" => $house->id,
                "username" => $attributes->input('username'),
                "email" => $attributes->input('email'),
                "phoneNumber" => $attributes->input('phoneNumber'),
                "message" => $attributes->input("message"),
                'reference' => $this->generateRandomTransaction(15)
            ]);
    }

    private function getHouse($attributes): Model|Builder|null
    {
        return House::query()
            ->where('key', '=', $attributes->input('house'))
            ->when('status', fn($builder) => $builder->where('status', HouseEnum::CONFIRMED))
            ->first();
    }

}
