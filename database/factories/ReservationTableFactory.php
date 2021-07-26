<?php

namespace Database\Factories;

use App\Models\ReservationTable;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationTableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReservationTable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 3),
            'room_id' => $this->faker->numberBetween(1, 10),
            'check_in' => $this->faker->dateTimeBetween('-10 days','now'),
            'check_out' => $this->faker->dateTimeBetween('now', '+10 days'),
        ];
    }
}
