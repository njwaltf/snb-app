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
            'nisn' => '1234567891',
            'prof_pic' => 'profile/yohan.jpg',
            'password' => Hash::make('yohan_123'),
            'grade' => '1',
        ]);
        User::create([
            'full_name' => 'Tri Tirta',
            'email' => 'tri@gmail.com',
            'username' => 'tirta_tri',
            'nisn' => '1771209641',
            'prof_pic' => 'profile/no-pp.png',
            'password' => Hash::make('siswa_03'),
            'grade' => '1',
        ]);
        User::create([
            'full_name' => 'Jusuf Idris',
            'email' => 'jusuf@gmail.com',
            'username' => 'jusuf_19',
            'nisn' => '7251920271',
            'prof_pic' => 'profile/no-pp.png',
            'password' => Hash::make('siswa_01'),
            'grade' => '2',
        ]);
        User::create([
            'full_name' => 'Hadi Wati',
            'email' => 'hadi@gmail.com',
            'username' => 'hadi_wati_01',
            'nisn' => '8595599666',
            'prof_pic' => 'profile/no-pp.png',
            'password' => Hash::make('siswa_02'),
            'grade' => '1',
        ]);
        User::create([
            'full_name' => 'Kusuma Ratna',
            'email' => 'ratna@gmail.com',
            'username' => 'ratna_aja',
            'nisn' => '9999999999',
            'prof_pic' => 'profile/no-pp.png',
            'password' => Hash::make('siswa_04'),
            'grade' => '3',
        ]);
        User::create([
            'full_name' => 'Siti Guntur',
            'email' => 'siti@gmail.com',
            'username' => 'guntur_bumi',
            'nisn' => '1111111111',
            'prof_pic' => 'profile/no-pp.png',
            'password' => Hash::make('siswa_05'),
            'grade' => '2',
        ]);
        User::create([
            'full_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin_snb',
            'prof_pic' => 'profile/no-pp.png',
            'password' => Hash::make('admin1234'),
        ]);
    }
}