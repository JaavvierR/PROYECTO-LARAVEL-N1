<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use App

use App\Models\Empleoyee;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call(RoleSeeder::class);
        // \App\Models\User::factory(10)->create();
      $this->call(EmpleoyeeSeeder::class);
      Empleoyee::factory(10)->create()->each(function($user){
          $empleoyee->assignRole('developer');  
      });
    }
}
