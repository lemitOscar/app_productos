<?php

namespace Database\Factories;

use App\Models\Direction;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Direction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pais' => $this->faker->city,
            'estado' => $this->faker->state,
            'municipio' => $this->faker->country,
            'localidad' => $this->faker->country,
            'codigo_postal' => $this->faker->postcode,
            'calle' => $this->faker->streetName,
            'num_ext' => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'num_int' => $this->faker->randomNumber($nbDigits = 2, $strict = false),
        ];
    }
}
