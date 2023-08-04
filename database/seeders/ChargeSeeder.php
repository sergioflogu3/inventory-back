<?php

namespace Database\Seeders;

use App\Models\Charge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Charge::create([
            'name' => 'Supervisor',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ]);
        Charge::create([
            'name' => 'Operador',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ]);
    }
}
