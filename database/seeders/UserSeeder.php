<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@test.com',
            'phone' => '9999999999',
            'password' => Hash::make('admin@123'),
        ]);

        User::create([
            'name' => 'Staff User',
            'username' => 'staff',
            'email' => 'staff@test.com',
            'phone' => '8888888888',
            'password' => Hash::make('staff@123'),
        ]);
    }
}
