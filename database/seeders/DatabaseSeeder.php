<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Person;
use App\Models\Personal;
use App\Models\Project;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(AgencySeeder::class);
        $this->call(ChargeSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(TypeDocumentSeeder::class);
        $this->call(TypePersonalSeeder::class);

        Project::factory(10)->create();
        Property::factory(5)->create();
        Person::factory(10)->create();
        Personal::factory(5)->create();
        User::factory(5)->create();
    }
}
