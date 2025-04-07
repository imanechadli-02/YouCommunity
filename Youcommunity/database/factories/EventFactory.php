<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Carbon\Carbon;

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
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(10),
            'maxParticipants' => $this->faker->numberBetween(10, 100),
            'dateHeure' => Carbon::now()->addDays($this->faker->numberBetween(1, 30)),
            'lieu' => $this->faker->city(),
            'photo' => 'photos/v9pKBIbi8GdeFranAeRT0Fg6nVEO6yiZck4eP3Sm.jpg',//$this->faker->imageUrl(640, 480, 'events'),
            'categorie' => $this->faker->randomElement(['Sport', 'Musique', 'Technologie', 'Art']),
            'status' => $this->faker->randomElement(['A venir', 'Passé']),
            'user_id' => User::factory(),
        ];
    }
}
