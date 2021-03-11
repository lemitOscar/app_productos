<?php

namespace Database\Factories;

use App\Models\Inventory;
use App\Models\Inventory_Producto;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class Inventory_ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory_Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'inventory_id' => Inventory::all()->random()->id,
            'producto_id' => Producto::all()->random()->id,
            //'inventory_id' => $this->faker->randomElement([1, 2, 4, 5, 6, 7, 8, 9, 10])->id,
            //'producto_id' => $this->faker->randomElement([1, 2, 4, 5, 6, 7, 8, 9, 10])->id,
        ];
    }
}
