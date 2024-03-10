<?php

namespace Database\Seeders;

use App\Models\abouts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class aboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        abouts::factory(10)->create();
    }
}
