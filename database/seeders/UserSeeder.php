<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Using DB facade
        DB::table('users')->insert([
            'name' => 'lama',
            'image' => 'oxfored.png',
            'email' => 'lama@gmail.com',
            'password' => Hash::make('Lama@123'),
            'role' => 'admin',
        ]);

        
    }
}
