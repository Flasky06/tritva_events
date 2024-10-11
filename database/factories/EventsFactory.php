<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generate start and end dates where end_date is after start_date
        $startDate = $this->faker->dateTimeBetween('now', '+1 week'); // Start date within the next week
        $endDate = $this->faker->dateTimeBetween($startDate, '+1 week'); // End date after the start date

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(1),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'tickets_available' => $this->faker->numberBetween(0, 500),
            'price' => $this->faker->randomFloat(2, 0, 100),
            'is_free' => $this->faker->boolean(),
            'created_by' => $this->faker->numberBetween(1, 10),
            'category' => $this->faker->word(),
            'location_type' => $this->faker->randomElement(['online', 'physical']),
            'location' => $this->faker->address(),
            'image_url' => $this->faker->imageUrl(),
            'event_link' => $this->faker->url(),
        ];
    }
}
