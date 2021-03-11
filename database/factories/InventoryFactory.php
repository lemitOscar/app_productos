<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->numberBetween($min = 1000000000, $max = 9000000000),
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->text,
            'stock_id' => Stock::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
