<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 100),
            'phone number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
        ];
    }
}

// command to create the profile model on the terminal?
// php artisan make:model Profile -m
// command for creating ProfileFactory?
// php artisan make:factory ProfileFactory --model=Profile

