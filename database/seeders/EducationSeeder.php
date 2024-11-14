<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'edu_start' => '2016-09-01',
            'edu_end' => '2020-09-01',
            'school_name' => 'Öğrenciden Armağan Anadolu Lisesi',
            'school_description' => 'Lise',
        ]);
        Education::create([
            'edu_start' => '2020-09-01',
            'edu_end' => '2024-09-01',
            'school_name' => 'Kastamonu Üniversitesi',
            'school_description' => 'Bilgisayar Mühendisliği',
        ]);
    }
}
