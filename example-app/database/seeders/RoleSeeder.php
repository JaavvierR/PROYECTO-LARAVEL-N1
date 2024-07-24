<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $admin = Role::create(['name' =>'admin']);
        $manager = Role::create(['name' => 'manager']);
        $developer = Role::create(['name' => 'developer']);
        

        Permission ::create(['name'=> 'empleoyee.index'])->syncRoles([$admin, $manager,$developer]);
        Permission ::create(['name'=> 'empleoyee.show'])->syncRoles([$admin, $manager]);
        Permission ::create(['name'=> 'empleoyee.store'])->syncRoles([$admin]);
        Permission ::create(['name'=> 'empleoyee.update'])->syncRoles([$admin]);
        Permission ::create(['name'=> 'empleoyee.destroy'])->syncRoles([$admin]);


    }
    
    
    
}
