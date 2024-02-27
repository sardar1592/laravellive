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
            'name' => $this->faker->randomElement(['Laravel', 'Symfony', 'Vue.js', 'React', 'Angular', 'Graphql', 'Hasura']) . ' ' 
                    . $this->faker->randomElement(['Meetup', 'Conference', 'Workshop', 'Conf']),
            'city' => $this->faker->randomElement(['Lahore', 'Karachi', 'Islamabad', 'Faisalabad', 'Multan']),
            'venue' => $this->faker->randomElement(['Online', 'PC', 'Marriot', 'Arfa Technology Park', 'LUMS', 'Expo Center', 'Avari']),
            'date' => $this->faker->dateTimeThisMonth(),
            'online' => $this->faker->boolean(),

        ];
    }
}
