<?php

namespace Database\Factories;

use App\Models\State;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'telefono' => $this->faker->phoneNumber,
            
            'pais' => $this->faker->city,
            'municipio' => $this->faker->country,
            'localidad' => $this->faker->country,
            'codigo_postal' => $this->faker->postcode,
            'calle' => $this->faker->streetName,
            'num_ext' => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'num_int' => $this->faker->randomNumber($nbDigits = 2, $strict = false),

            'state_id' => State::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
