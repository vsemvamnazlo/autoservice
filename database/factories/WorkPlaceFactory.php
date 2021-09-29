<?php

namespace Database\Factories;

use App\Models\WorkPlace;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class WorkPlaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkPlace::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'order' => $this->faker->text,
            'building_id' => Building::factory(),
        ];
    }
}
