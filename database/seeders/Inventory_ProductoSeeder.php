<?php

namespace Database\Seeders;

use App\Models\Inventory_Producto;
use Database\Factories\Inventory_ProductoFactory;
use Illuminate\Database\Seeder;

class Inventory_ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory_Producto::create([
            'inventory_id' =>  '1',
            'producto_id' =>  '1'
        ]);

        Inventory_Producto::factory(9)->create();
    }
}
