<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Collection;
use App\Models\Client;
use App\Models\Mechanic;


class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
    
        return [
            'client_id' => Client::factory(),
            'mechanic_id' => Mechanic::factory(),
            'start_at' => $this->faker->date,
            'end_at' => '--',
            'status' => 'processing',
            'notes' => 'oil change',
        ];
    }
}
