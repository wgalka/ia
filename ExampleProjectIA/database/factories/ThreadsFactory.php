<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Categories;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Threads>
 */
class ThreadsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'user_id' => User::factory(),
            'category_id' => Categories::factory(),    
        ];
    }
}
