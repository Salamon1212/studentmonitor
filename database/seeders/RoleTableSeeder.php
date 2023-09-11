<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name'=>'hod'],
            ['name'=>'staff'],
            ['name'=>'student']];

            foreach ($roles as $role) {

                Role::create($role);
        }
    
    }
}
