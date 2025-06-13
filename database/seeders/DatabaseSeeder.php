<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Dummy super-admin
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password'), // Jangan lupa ganti dengan password yang aman
            'role' => 'super-admin', // Role yang digunakan untuk mengakses fitur tertentu
        ]);

        // Dummy admin-hr
        User::create([
            'name' => 'Admin HR',
            'email' => 'adminhr@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin-hr',
        ]);

        // Dummy manager
        User::create([
            'name' => 'Manager',
            'email' => 'manager@example.com',
            'password' => bcrypt('password'),
            'role' => 'manager',
        ]);

        // Dummy karyawan
        User::create([
            'name' => 'Karyawan',
            'email' => 'karyawan@example.com',
            'password' => bcrypt('password'),
            'role' => 'karyawan',
        ]);
    }
}
