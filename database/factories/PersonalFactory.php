<?php

namespace Database\Factories;

use App\Models\Charge;
use App\Models\Person;
use App\Models\TypePersonal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal>
 */
class PersonalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_person' => Person::all()->random()->id,
            'id_type_personal' => TypePersonal::all()->random()->id,
            'id_charge' => Charge::all()->random()->id,
            'active' => true,
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ];
    }
}
