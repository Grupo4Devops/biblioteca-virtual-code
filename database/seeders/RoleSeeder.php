<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $readerRole = Role::create(['name' => 'reader']);

        // Create permissions

        // Books permissions
        Permission::create(['name' => 'index books'])->assignRole($adminRole, $readerRole);
        Permission::create(['name' => 'create books'])->assignRole($adminRole);
        Permission::create(['name' => 'store books'])->assignRole($adminRole);
        Permission::create(['name' => 'read books'])->assignRole($adminRole, $readerRole);
        Permission::create(['name' => 'edit books'])->assignRole($adminRole);
        Permission::create(['name' => 'update books'])->assignRole($adminRole);
        Permission::create(['name' => 'delete books'])->assignRole($adminRole);

        // Genders permissions
        Permission::create(['name' => 'index genders'])->assignRole($adminRole);
        Permission::create(['name' => 'create genders'])->assignRole($adminRole);
        Permission::create(['name' => 'store genders'])->assignRole($adminRole);
        Permission::create(['name' => 'edit genders'])->assignRole($adminRole);
        Permission::create(['name' => 'update genders'])->assignRole($adminRole);
        Permission::create(['name' => 'delete genders'])->assignRole($adminRole);

        // Users permissions
        Permission::create(['name' => 'index users'])->assignRole($adminRole);
        Permission::create(['name' => 'create users'])->assignRole($adminRole);
        Permission::create(['name' => 'store users'])->assignRole($adminRole);
        Permission::create(['name' => 'edit users'])->assignRole($adminRole);
        Permission::create(['name' => 'update users'])->assignRole($adminRole);
        Permission::create(['name' => 'delete users'])->assignRole($adminRole);
    }
}
