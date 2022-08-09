<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\House;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition(): array
    {
        return [
            'images' => $this->faker->word(),
            'user_id' => User::factory(),
            'house_id' => House::factory(),
        ];
    }
}
