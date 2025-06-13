<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan pengguna dengan berbagai peran
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password'), // Gantilah dengan password yang aman
            'role' => 'super-admin',
        ]);

        User::create([
            'name' => 'Admin HR',
            'email' => 'adminhr@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin-hr',
        ]);

        User::create([
            'name' => 'Manager',
            'email' => 'manager@example.com',
            'password' => bcrypt('password'),
            'role' => 'manager',
        ]);

        User::create([
            'name' => 'Karyawan',
            'email' => 'karyawan@example.com',
            'password' => bcrypt('password'),
            'role' => 'karyawan',
        ]);
    }
}
