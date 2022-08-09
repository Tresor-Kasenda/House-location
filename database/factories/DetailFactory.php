<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Detail;
use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DetailFactory extends Factory
{
    protected $model = Detail::class;

    public function definition(): array
    {
        return [
            'room_number' => $this->faker->randomNumber(),
            'number_pieces' => $this->faker->randomNumber(),
            'toilet' => $this->faker->word(),
            'electricity' => $this->faker->randomNumber(),
            'house_id' => House::factory(),
        ];
    }
}
