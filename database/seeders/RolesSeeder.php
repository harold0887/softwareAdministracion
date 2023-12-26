<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role = Role::create(['name' => 'administrador']);
        $role = Role::create(['name' => 'super-admin']);
        $role = Role::create(['name' => 'comite']);
        $role = Role::create(['name' => 'propietario']);
    }
}
