<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MailingList>
 */
class MailingListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'list_name' => fake()->word(),
            'list_description' => fake()->sentence(),
            'added_by' => User::all()->random()->id,
            'created_at' => now(),
        ];
    }
}
