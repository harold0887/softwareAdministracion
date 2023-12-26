<?php

namespace Database\Seeders;

use App\Models\Propiedad;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class propiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Propiedad::create([
            'name' => 'Casa 1',
            'codigo_propiedad' => "XXXXX1",
            'condominio_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
            'slug' => Str::slug("casa 1", '-'),
            
        ]);
        Propiedad::create([
            'name' => 'Casa 2',
            'codigo_propiedad' => "XXXXX2",
            'condominio_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
            'slug' => Str::slug("casa 2", '-'),
        ]);
    }

    // public function codigo_propiedad($longitud) {
    //     $key = '';
    //     $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    //     $max = strlen($pattern)-1;
    //     for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    //     return $key;
    // } 

    
}
