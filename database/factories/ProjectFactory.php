<?php

namespace Database\Factories;

use App\Models\Agency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_agency' => Agency::all()->random()->id,
            'name' => $this->faker->name(),
            'star_date' => $this->faker->date,
            'star_end' => $this->faker->date,
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ];
    }
}
