<?php

namespace Database\Seeders;

use App\Models\Condominio;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CondominioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Condominio::create([
            'name' => 'Privada Coralina (demo)',
            'slug' => Str::slug("Privada Coralina (demo)", '-'),
            'direccion' => 'SMZ 254, Cancun',
            'cp'=>77519,
            'estado' => 'Quintana Roo',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
        Condominio::create([
            'name' => 'Privada Chad',
            'slug' => Str::slug("Privada Chad", '-'),
            'direccion' => 'SMZ 253, Cancun',
            'cp'=>77518,
            'estado' => 'Quintana Roo',
            'status' => false,
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
        Condominio::create([
            'name' => 'Haciendas de parque',
            'slug' => Str::slug("Haciendas de parque", '-'),
            'direccion' => 'Av sierra viaja, ',
            'cp'=>54763,
            'estado' => 'Estado de Mexico',
            'status' => false,
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
    }
}
