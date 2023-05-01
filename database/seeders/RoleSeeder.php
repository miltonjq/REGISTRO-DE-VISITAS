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
        $supervisor= Role::create(['name' => 'supervisor']);
        $guardiania = Role::create(['name' => 'guardiania']);

        Permission::create(['name' => 'inicio'])->syncRoles([$admin, $guardiania, $supervisor]);
        Permission::create(['name' => 'registrar_visitas'])->syncRoles([$admin, $guardiania]);
        Permission::create(['name' => 'registrar_salida'])->syncRoles([$admin, $guardiania, $supervisor]);
        Permission::create(['name' => 'reporte_visitas'])->syncRoles([$admin, $guardiania, $supervisor]);
        Permission::create(['name' => 'agregar_oficina'])->syncRoles([$admin]);
        Permission::create(['name' => 'agregar_usuario'])->syncRoles([$admin]);
        Permission::create(['name' => 'ver_usuario'])->syncRoles([$admin, $supervisor]);
        Permission::create(['name' => 'agregar_roles'])->syncRoles([$admin]);
        Permission::create(['name' => 'agregar_sedes'])->syncRoles([$admin]);
    }
}

