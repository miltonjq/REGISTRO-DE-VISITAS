<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $personero = Role::create(['name' => 'personero']);

        Permission::create(['name' => 'inicio'])->syncRoles([$admin, $personero]);
        Permission::create(['name' => 'registrar_visitas'])->syncRoles([$admin, $personero]);
        Permission::create(['name' => 'reporte_visitas'])->syncRoles([$admin, $personero]);
        Permission::create(['name' => 'agregar_oficina'])->syncRoles([$admin]);
        Permission::create(['name' => 'agregar_usuario'])->syncRoles([$admin]);
        Permission::create(['name' => 'agregar_roles'])->syncRoles([$admin]);
    }
}

