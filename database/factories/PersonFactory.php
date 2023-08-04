<?php

namespace Database\Factories;

use App\Models\TypeDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_type_document' => TypeDocument::all()->random()->id,
            'gender' => 'M' || 'F',
            'number_document' => $this->faker->numberBetween(int2: 2147483647),
            'complement' => '',
            'names' => $this->faker->name(),
            'last_name' => $this->faker->firstName(),
            'second_name' => $this->faker->lastName(),
            'birth_date' => $this->faker->date('Y-m-d'),
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ];
    }
}
