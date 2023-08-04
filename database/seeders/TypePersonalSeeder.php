<?php

namespace Database\Seeders;

use App\Models\TypePersonal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypePersonal::create([
            'name' => 'Personal de Planta',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
        TypePersonal::create([
            'name' => 'Consultor',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
    }
}
