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
        $rolAdmin = Role::create(['name'=> 'Admin']);
        $permisoAdmin = Permission::create(['name' => 'CRUD Manager']);

        $rolAdmin->givePermissionTo($permisoAdmin);

        $rolNormal = Role::create(['name'=>'User']);
        $permisoNormal = Permission::create(['name'=>'Normal User']);
        $rolNormal->givePermissionTo($permisoNormal);

    }
}
