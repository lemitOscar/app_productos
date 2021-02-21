<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleadmin = Role::create(['name' => 'Admin']);
        $roleseller = Role::create(['name' => 'Cajero']);

        Permission::create(['name' => "productos"])->syncRoles([$roleadmin, $roleseller]);
        Permission::create(['name' => "productos.lista"])->syncRoles([$roleadmin, $roleseller]);
        Permission::create(['name' => "producto.new"])->syncRoles([$roleadmin, $roleseller]);
        Permission::create(['name' => "producto.edit"])->syncRoles([$roleadmin, $roleseller]);
        Permission::create(['name' => "producto.delete"])->syncRoles([$roleadmin, $roleseller]);

        
    }
}
