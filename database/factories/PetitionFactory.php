<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petition>
 */
class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /**
         * @var \App\Models\Author $author
         * @var \App\Models\Petition $petitionFactory
         */
        return [
            'title' => $this->faker->sentence,
            'category' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'signees' => $this->faker->numberBetween(0, 100000),
        ];
    }
}
