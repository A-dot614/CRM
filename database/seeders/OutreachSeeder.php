<?php

namespace Database\Seeders;

use App\Models\Outreach;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutreachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outreach::factory()->count(10)->create();
    }
}
