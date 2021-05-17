<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prods = Producto::factory(100)->create();
        foreach($prods as $prod){
          $prod->inventories()->attach([
                rand(1, 5),
                rand(6, 10),
              ]);  
        }
    }
}
