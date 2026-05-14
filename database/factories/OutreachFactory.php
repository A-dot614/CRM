<?php

namespace Database\Factories;

use App\Models\Outreach;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Outreach>
 */
class OutreachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "lead_id" => $this->faker->numberBetween(1, 10),
            "outreach_channel_id" => $this->faker->numberBetween(1, 10),
            "date" => $this->faker->dateTime(),
            "note" => $this->faker->paragraph(),
            "score" => $this->faker->numberBetween(1, 10),
        ];
    }
}
