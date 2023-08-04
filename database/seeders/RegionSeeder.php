<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create([
            'name' => 'Sucre',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
        Region::create([
            'name' => 'La Paz',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
        Region::create([
            'name' => 'Cochabamba',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
        Region::create([
            'name' => 'Oruro',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
        Region::create([
            'name' => 'Potosí',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
        Region::create([
            'name' => 'Tarija',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
        Region::create([
            'name' => 'Santa Cruz',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
        Region::create([
            'name' => 'Trinidad',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
        Region::create([
            'name' => 'Cobija',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203'
        ]);
    }
}
