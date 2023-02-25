<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'Admin',
                'password' => Hash::make('admin123'),
                'role' => 'admin'
            ],
            [
                'username' => 'Budi',
                'password' => Hash::make('pc_builder123'),
                'role' => 'simulator'
            ],
        ]);
    }
}
