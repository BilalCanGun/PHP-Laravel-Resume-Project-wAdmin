<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            "name" => "Bilal Can Gün",
            "phone" => "0 551 127 94 01",
            "email" => "bilalcangunbcg@gmail.com",
            "website" => "bilalcangun.dev",
            "address" => "Başakşehir,İstanbul",
        ]);
    }
}
