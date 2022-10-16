<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'event_category_id' => 1,
            'title' => fake()->sentence(),
            'thumbnail' => fake()->imageUrl(640, 480, 'sports', true),
            'content' => fake()->randomHtml(),
        ];
    }
}
