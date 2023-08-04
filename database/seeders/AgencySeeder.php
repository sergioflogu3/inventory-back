<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agency::create([
            'name' => 'UNICEF',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ]);
        Agency::create([
            'name' => 'ONU',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ]);
        Agency::create([
            'name' => 'Chancho Feliz',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ]);
    }
}
