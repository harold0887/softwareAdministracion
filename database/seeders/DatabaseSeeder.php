<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RolesSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([CondominioSeeder::class]);
        $this->call([propiedadSeeder::class]);
        $this->call([PropiedadUserSeeder::class]);
        
        
    }
}
