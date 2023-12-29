<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 3),
            'category_id' => $this->faker->numberBetween(1, 3),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'amount' => $this->faker->numberBetween(1, 10),
            'pdf' => $this->faker->sentence(3),
            'image' => $this->faker->sentence(3),
        ];
    }
}
