<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Client;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory()->count(1)
        ->for(Client::factory()->state([
            'name' => 'Arseniy Raskind'
        ]))->create();   
    }
}
