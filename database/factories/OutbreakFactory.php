<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Outbreak;
use Illuminate\Database\Eloquent\Factories\Factory;

class OutbreakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'name' => $this->faker->name(),
                'address' => $this->faker->address,
                'latitude' => $this->faker->latitude,
                'longitude' => $this->faker->longitude,
                'creator_id' => User::factory(),
            
            ];
        

    }
}
