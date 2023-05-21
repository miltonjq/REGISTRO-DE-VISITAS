<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oficinas;


class OficinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Oficinas::create(['nombre_oficina' => 'recursos humanos', 'piso' => 'piso 1', 'sede_id' => 1]);
        Oficinas::create(['nombre_oficina' => 'administracion', 'piso' => 'piso 2', 'sede_id' => 1]);
        Oficinas::create(['nombre_oficina' => 'secretaria', 'piso' => 'piso 3', 'sede_id' => 1]);


        Oficinas::create(['nombre_oficina' => 'sub administracion', 'piso' => 'piso 1', 'sede_id' => 2]);
        Oficinas::create(['nombre_oficina' => 'sub secretaria', 'piso' => 'piso 2', 'sede_id' => 2]);
        Oficinas::create(['nombre_oficina' => 'imagen institucional', 'piso' => 'piso 3', 'sede_id' => 2]);
    }
}
