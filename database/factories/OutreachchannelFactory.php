<?php

namespace Database\Factories;

use App\Models\Outreachchannel;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Outreachchannel>
 */
class OutreachchannelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>$this->faker->word(),
            "status"=>$this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
