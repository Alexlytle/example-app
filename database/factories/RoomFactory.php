<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room_number' => $this->faker->unique()->numberBetween(1, 30),
            'room_size' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->numberBetween(100, 600),
            'description' => $this->faker->text(1000),
        ];
    }
}
