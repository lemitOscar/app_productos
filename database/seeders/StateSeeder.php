<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create(['nombre' => 'México',]);
        State::create(['nombre' => 'Jalisco',]);
        State::create(['nombre' => 'Guerrero',]);
        State::create(['nombre' => 'Nuevo León',]);
        State::create(['nombre' => 'Michoacán',]);
        
        State::create(['nombre' => 'Yucatán',]);
        State::create(['nombre' => 'Chiapas',]);
        State::create(['nombre' => 'Baja California',]);
        State::create(['nombre' => 'Hidalgo',]);
        State::create(['nombre' => 'Sonora',]);

        State::create(['nombre' => 'Sinaloa',]);
        State::create(['nombre' => 'Morelos',]);
        State::create(['nombre' => 'Tamaulipas',]);
        State::create(['nombre' => 'Quintana Roo',]);
        State::create(['nombre' => 'Tlaxcala',]);

        State::create(['nombre' => 'Zacatecas',]);
        State::create(['nombre' => 'Tabasco',]);
        State::create(['nombre' => 'Coahuila de Zaragoza',]);
        State::create(['nombre' => 'Baja California Sur',]);
        State::create(['nombre' => 'Nayarit',]);

        State::create(['nombre' => 'Guanajuato',]);
        State::create(['nombre' => 'Ciudad de México',]);
        State::create(['nombre' => 'Queretaro',]);
        State::create(['nombre' => 'Chihuahua',]);
        State::create(['nombre' => 'Oaxaca',]);

        State::create(['nombre' => 'Veracruz',]);
        State::create(['nombre' => 'Puebla',]);
        State::create(['nombre' => 'San Luis Potosí',]);
        State::create(['nombre' => 'Durango',]);
        State::create(['nombre' => 'Aguascalientes',]);

        State::create(['nombre' => 'Campeche',]);
        State::create(['nombre' => 'Colima',]);
    }
}
