<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sedes;


class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Sedes::create(['nombre_sede' => 'sede central gore', 'direccion' => 'Jr. Deustua 356, Puno 21001']);
        Sedes::create(['nombre_sede' => 'sub sede gore', 'direccion' => 'Jr Lima, 152']);
        Sedes::create(['nombre_sede' => 'sede juliaca', 'direccion' => 'Jr Arequipa, 203']);
    }
}
