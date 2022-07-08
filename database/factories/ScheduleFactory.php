<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'time' => $this->faker->time('H:i:s'),
            'lecture_name' => $this->faker->name,
            'status' => $this->faker->randomElement(['0', '1']),
        ];
    }
}
