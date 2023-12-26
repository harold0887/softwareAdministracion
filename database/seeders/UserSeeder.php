<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAdmin = User::create([
            'name' => 'Super Administrador',
            'email' => 'harold0887@hotmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('5514404046'),
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);

        $user = User::create([
            'name' => 'Arnulfo Acosta Cruz',
            'email' => 'arnulfoacosta0887@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('5514404046'),
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);

        $userAdmin->assignRole('super-admin');
        $user->assignRole('propietario');

    }
}
