<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),            
            'description' => $this->faker->paragraph(),            
            // 'image' => $this->faker->randomNumber(10),
        ];
    }
}
