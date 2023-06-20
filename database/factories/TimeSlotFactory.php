<?php

namespace Database\Factories;

use App\Models\EscapeRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimeSlot>
 */
class TimeSlotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $escapeRoom = EscapeRoom::inRandomOrder()->first();
        return [
            'escape_room_id' => $escapeRoom->id,
            'start_time_slot' => fake()->dateTimeBetween(),
            'price' => fake()->numberBetween(10000,1000000),
            'is_reserved' => 0
        ];
    }
}
