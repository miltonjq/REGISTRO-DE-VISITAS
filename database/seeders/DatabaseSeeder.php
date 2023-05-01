<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Oficina and Sede
        $this->call(SedeSeeder::class);
        $this->call(OficinaSeeder::class);
        
        //Roles y Premises
        $this->call(RoleSeeder::class);
        //Basic Users
        $this->call(UserSeeder::class);
        
        User::factory(3)->create()->each(function($user){
            $user->assignRole('guardiania');
        });
        

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
