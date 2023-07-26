<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Poly;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Poly::create([
            'name' => 'Penyakit Dalam'
        ]);

        Poly::create([
            'name' => 'Penyakit Luar'
        ]);

        Doctor::factory(10)->create();
        Patient::factory(10)->create();
        Admin::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
