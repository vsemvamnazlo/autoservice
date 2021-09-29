<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Client;
use App\Models\Mechanic;
use App\Models\Order;
use App\Models\WorkPlace;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            OrderSeeder::class,
            BuildingSeeder::class,
            ClientSeeder::class,
            MechanicSeeder::class,
            WorkPlaceSeeder::class,
        ]);

    }
}
