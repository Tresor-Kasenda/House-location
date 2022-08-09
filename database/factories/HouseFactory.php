<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\HouseEnum;
use App\Models\House;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{
    protected $model = House::class;

    public function definition(): array
    {
        return [
            'prices' => $this->faker->randomNumber(),
            'commune' => $this->faker->word(),
            'town' => $this->faker->word(),
            'district' => $this->faker->word(),
            'address' => $this->faker->address(),
            'guarantees' => $this->faker->randomNumber(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'images' => $this->faker->word(),
            'status' => HouseEnum::INVALIDATED_HOUSE,
            'reference' => $this->faker->word(),

            'user_id' => User::factory(),
            'type_id' => Type::factory(),
        ];
    }
}
