<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\ReservationEnum;
use App\Models\House;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition(): array
    {
        return [
            'status' => ReservationEnum::PENDING_RESERVATION,
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phones' => $this->faker->word(),
            'messages' => $this->faker->word(),
            'reference' => $this->faker->word(),
            'user_id' => User::factory(),
            'house_id' => House::factory(),
        ];
    }
}
