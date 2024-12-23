<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);

        Permission::create(['name' => 'view dashboard']);
        Permission::create(['name' => 'edit articles']);

        Role::findByName('admin')->givePermissionTo(Permission::all());
        Role::findByName('editor')->givePermissionTo(['view dashboard', 'edit articles']);
    }
}