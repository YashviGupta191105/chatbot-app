<?php

namespace Database\Seeders;
use Database\Seeders\ChatbotResponseSeeder;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Add your seeder class here
        $this->call([
            ChatbotResponseSeeder::class,
            // You can add other seeders here
        ]);
    }
}


