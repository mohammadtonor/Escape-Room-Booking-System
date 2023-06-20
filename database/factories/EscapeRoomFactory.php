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
            'participants_number'=> fake()->randomDigit(),
            'difficulty'=> fake()->randomDigit(),
            'Scary_degree'=> fake()->randomDigit(),
            'phone_number'=>fake()->phoneNumber,
            'address'=> fake()->address
        ];
    }
}
