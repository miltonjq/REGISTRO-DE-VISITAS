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
        Oficinas::create(['nombre_oficina' => 'recursos humanos',]);
        Oficinas::create(['nombre_oficina' => 'administracion',]);
    }
}
