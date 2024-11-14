<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;


class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([

            "job_start" => "2023-09-09",
            "job_end" => "2025-09-09",
            "company" => "Kültür Üniversitesi",
            "description" => "Yazılım Uzman Yardımcısı",
        ]);
    }
}
