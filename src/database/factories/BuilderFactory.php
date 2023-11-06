<?php

namespace Database\Factories;

use App\Enums\Heating;
use App\Enums\WallType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Builder>
 */
class BuilderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city' => $this->faker->city,
            'street' => $this->faker->streetName,
            'building_number' => $this->faker->buildingNumber,
            'wallType' => $this->faker->randomElement(WallType::values()),
            'heating' => $this->faker->randomElement(Heating::values()),
        ];
    }
}
