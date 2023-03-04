<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Plan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // pelan
        Plan::create([
            'name' => 'ordinary',
            'persian_name' => 'معمولی'
        ]);
        Plan::create([
            'name' => 'urgancy',
            'persian_name' => 'فوری'
        ]);
        Plan::create([
            'name' => 'immediately',
            'persian_name' => 'آنی'
        ]);
    }
}
