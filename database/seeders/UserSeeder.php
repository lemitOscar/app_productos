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
        
        User::factory(9)->create();
    }
}
