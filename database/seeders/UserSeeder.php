<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Francisco Nava',
            'email' => '2519160076.fnavar@gmail.com',
            'password' => bcrypt('$JFranciscoNavaR$')
        ])->assignRole('Admin');

        User::create([
            'name' => 'José Rodríguez',
            'email' => 'josefrancisconava07@gmail.com',
            'password' => bcrypt('$FranciscoNava$')
        ])->assignRole('Cajero');
        
        User::factory(3)->create();
    }
}
