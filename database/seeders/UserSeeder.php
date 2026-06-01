<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@bolinao.com',
            'phone'    => '09171234567',
            'password' => Hash::make('password123'),
            'role'     => 'admin',
        ]);

        User::create([
            'name'     => 'Juan Dela Cruz',
            'email'    => 'juan@example.com',
            'phone'    => '09201234567',
            'password' => Hash::make('password123'),
            'role'     => 'tourist',
        ]);
    }
}
