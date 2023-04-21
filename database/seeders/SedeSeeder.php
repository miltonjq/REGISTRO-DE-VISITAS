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
        Sedes::create(['nombre_sede' => 'sede central gore',]);
        Sedes::create(['nombre_sede' => 'sub sede gore',]);
    }
}
