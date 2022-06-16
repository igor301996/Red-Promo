<?php

namespace Database\Seeders;

use App\Models\ResearchWork;
use Illuminate\Database\Seeder;

class ResearchWorktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResearchWork::factory()->times(100)->create();
    }
}
