<?php

namespace Database\Seeders;

use App\Models\PropiedadUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropiedadUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropiedadUser::create([
            'propiedad_id'=>1,
            'user_id'=>1
        ]);
    }
}
