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
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Laravel', 'Symfony', 'Vue.js', 'React', 'Angular', 'Graphql', 'Hasura']) . ' ' 
                    . fake()->randomElement(['Meetup', 'Conference', 'Workshop', 'Conf']),
            'city' => fake()->randomElement(['Lahore', 'Karachi', 'Islamabad', 'Faisalabad', 'Multan']),
            'venue' => fake()->randomElement(['Online', 'PC', 'Marriot', 'Arfa Technology Park', 'LUMS', 'Expo Center', 'Avari']),
            'date' => fake()->dateTimeThisMonth(),
            'online' => fake()->boolean(),

        ];
    }
}
