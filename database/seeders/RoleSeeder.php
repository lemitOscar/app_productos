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

        /*Para Asignar Muchos Roles*/
        Permission::create(['name' => "inicio"])->syncRoles([$roleadmin, $roleseller]);
        /*Para Asignar Un Rol*/
        //Permission::create(['name' => "inicio"])->assignRole([$roleadmin]);

        Permission::create(['name' => "productos"])->syncRoles([$roleadmin, $roleseller]);
        Permission::create(['name' => "producto.new"])->syncRoles([$roleadmin, $roleseller]);
        Permission::create(['name' => "producto.edit"])->syncRoles([$roleadmin, $roleseller]);
        Permission::create(['name' => "producto.delete"])->assignRole([$roleadmin]);
    }
}
