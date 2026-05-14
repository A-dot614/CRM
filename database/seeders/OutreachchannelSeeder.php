<?php

namespace Database\Seeders;

use App\Models\Outreachchannel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutreachchannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outreachchannel::factory()->count(10)->create();
    }
}
