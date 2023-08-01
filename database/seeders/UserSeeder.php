<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        User::create([
            'full_name' => 'Seong Johan',
            'email' => 'yohan@gmail.com',
            'username' => 'yohann_12',
            'nis' => '1234567891',
            'prof_pic' => 'profile/yohan.jpg',
            'password' => Hash::make('12345678'),
            'grade' => '1',
        ]);
        // User::create([
        //     'full_name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'username' => 'admin_snb',
        //     'prof_pic' => 'profile/yohan.jpg',
        //     'password' => Hash::make('admin1234'),
        //     'role' => 0
        // ]);
    }
}