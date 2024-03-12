<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
 
    public function run(): void
    {
        $usersData = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@gmail.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane.doe@gmail.com',
                'password' => bcrypt('password456'),
            ],
            [
                'name' => 'User 3',
                'email' => 'user3@gmail.com',
                'password' => bcrypt('password789'),
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@gmail.com',
                'password' => bcrypt('alicepassword'),
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@gmail.com',
                'password' => bcrypt('bobpassword'),
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charlie.brown@gmail.com',
                'password' => bcrypt('charliepassword'),
            ],
            [
                'name' => 'David Williams',
                'email' => 'david.williams@gmail.com',
                'password' => bcrypt('davidpassword'),
            ],
            [
                'name' => 'Eva Davis',
                'email' => 'eva.davis@gmail.com',
                'password' => bcrypt('evapassword'),
            ],
            [
                'name' => 'Frank White',
                'email' => 'frank.white@gmail.com',
                'password' => bcrypt('frankpassword'),
            ],
            [
                'name' => 'Grace Miller',
                'email' => 'grace.miller@gmail.com',
                'password' => bcrypt('gracepassword'),
            ],
        ];
        
        User::insert($usersData);
    }
}
