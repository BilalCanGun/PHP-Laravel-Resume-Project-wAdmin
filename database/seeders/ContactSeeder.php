<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            "social_name" => "Facebook",
            "social_url" => "#",

        ]);
        Contact::create([
            "social_name" => "Instagram",
            "social_url" => "#",

        ]);
        Contact::create([
            "social_name" => "Linkedln",
            "social_url" => "#",

        ]);
    }
}
