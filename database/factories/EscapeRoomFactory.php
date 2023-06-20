<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EscapeRoom>
 */
class EscapeRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->name,
            'description' =>fake()->text(),
            'story' => fake()->sentence,
            'duration'=> fake()->randomDigit() * 10,
            'min_participants_number'=> fake()->numberBetween(1,4),
            'max_participants_number'=> fake()->numberBetween(4,10),
            'difficulty'=> fake()->randomDigit(),
            'Scary_degree'=> fake()->randomDigit(),
            'phone_number'=>fake()->phoneNumber,
            'address'=> fake()->address
        ];
    }
}
