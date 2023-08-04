<?php

namespace Database\Seeders;

use App\Models\TypeDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeDocument::create([
            'name' => 'Cedula de Identidad',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ]);
        TypeDocument::create([
            'name' => 'Cedula de Identidad Extranjero',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ]);
        TypeDocument::create([
            'name' => 'DNI',
            'user_register' => 'sergio.flores',
            'number_ip' => '192.168.1.203',
        ]);
    }
}
