<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Role::create([
            'key' => 1 ,
            'title' => 'admin' ,
        ]);


        Role::create([
            'key' => 2 ,
            'title' => 'section' ,
        ]);

        Role::create([
            'key' => 3 ,
            'title' => 'barmill' ,
        ]);


        Role::create([
            'key' => 4 ,
            'title' => 'workshop' ,
        ]);


        Role::create([
            'key' => 5 ,
            'title' => 'manager' ,
        ]);

    }
}
