<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Commissioner;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommissionerFactory extends Factory
{
    protected $model = Commissioner::class;

    public function definition(): array
    {
        return [
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'images' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),

            'user_id' => User::factory(),
        ];
    }
}
