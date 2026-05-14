<?php

namespace Database\Factories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "slug" => $this->faker->unique()->slug(),
            
            "user_id" => $this->faker->numberBetween(1, 10),
            "name" => $this->faker->name(),
            "email" => $this->faker->email(),
            "phone" => $this->faker->phoneNumber(),
            "note" => $this->faker->paragraph(),
            "address" => $this->faker->address(),
            "status" => $this->faker->randomElement(['new', 'contacted', 'warm', 'closed', 'lost']),
            "source" => $this->faker->randomElement(['LinkedIn', 'Google', 'Referral', 'Other']),
            "companyName" => $this->faker->company(),
            "companyWebsite" => $this->faker->url(),
            "companyLinkedin" => $this->faker->url(),
            "companyEmail" => $this->faker->email(),
            "userlinkedin" => $this->faker->url(),
        ];
    }
}
