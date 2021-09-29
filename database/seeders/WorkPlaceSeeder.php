<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WorkPlace;

class WorkPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkPlace::factory()->count(4)->create();
    }
}
