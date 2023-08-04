<?php

namespace Database\Factories;

use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_region' => Region::all()->random()->id,
            'name' => $this->faker->domainName(),
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ];
    }
}
