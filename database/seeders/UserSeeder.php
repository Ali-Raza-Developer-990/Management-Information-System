<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ali jee',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'), 
            'age' => '21',
            'contact' => '03161216880',
            'designation' => 'Admin',
            'city' => 'karachi',
            'roles' => 'Admin',
            
        ]);

        User::create([
            'name' => 'kamran',
            'email' => 'kamran@gmail.com',
            'password' => bcrypt('123'), 
            'age' => '33',
            'contact' => '0322347446373',
            'designation' => 'Manager',
            'city' => 'karachi',
            'roles' => 'Employee'
        ]);
        User::create([
            'name' => 'Farhan Ali Haider',
            'email' => 'farhan14@gmail.com',
            'password' => bcrypt('123'), 
            'age' => 22,
            'contact' => null,
            'designation' => 'IT',
            'city' => 'Karachi',
            'roles' => 'Employee',
           
        ]);

        User::create([
            'name' => 'Farhan Ali Haider',
            'email' => 'farhan1@gmail.com',
            'password' => bcrypt('123'), 
            'age' => 22,
            'contact' => '03232435356',
            'designation' => 'IT',
            'city' => 'Karachi',
            'roles' => 'Employee',
            
        ]);

        User::create([
            'name' => 'Haider',
            'email' => 'haider1@gmail.com',
            'password' => bcrypt('123'), 
            'age' => 32,
            'contact' => '0863e4376',
            'designation' => 'IT',
            'city' => 'Karachi',
            'roles' => 'Employee',
        ]);

        User::create([
            'name' => 'Haider22',
            'email' => 'haider14@gmail.com',
            'password' =>bcrypt('123'), 
            'age' => 22,
            'contact' => '04232435',
            'designation' => 'IT',
            'city' => 'Karachi',
            'roles' => 'Employee',
        ]);

        User::create([
            'name' => 'Wajid',
            'email' => 'wajid@gmail.com',
            'password' =>bcrypt('123'), 
            'age' => 33,
            'contact' => '03232435356',
            'designation' => 'IT',
            'city' => 'Karachi',
            'roles' => 'Employee',
        ]);
    }
}
