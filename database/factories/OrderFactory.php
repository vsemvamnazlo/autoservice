<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


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
        $clientIDs = DB::table('clients')->pluck('id')->random();
        $mechanicIDs = DB::table('mechanics')->pluck('id')->random();
        $date = '2021-10-' . rand(0,30);
    
        return [
            'client_id' => $clientIDs,
            'mechanic_id' => $mechanicIDs,
            'start_at' => $this->faker->date($date),
            'end_at' => $this->faker->date($date),
            'status' => 'processing',
            'notes' => 'oil change',
            'price' => $this->faker->numberBetween(1000, 10000),
            'orders_count' => $this->faker->numberBetween(1, 5),

        ];
    }
}


// dateTimeThisMonth($max = '2021-10-30'),