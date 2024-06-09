<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'John Doe',
                'username' => 'john_doe',
                'email' => 'faizan123@gmail.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'jane_smith',
                'email' => 'faizan32@gmail.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Alice Johnson',
                'username' => 'alice_johnson',
                'email' => 'faizan021@gmail.com',
                'password' => Hash::make('password123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
