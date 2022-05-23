<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'name' => 'Admin',
            'role' => 'admin'
        ]);

        User::create([
            'username' => 'unedo',
            'email' => 'unedo@del.ac.id',
            'password' => Hash::make('password'),
            'name' => 'Unedo',
            'role' => 'dokter'
        ]);
    }
}
