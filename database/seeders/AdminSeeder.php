<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username' => 'kepsek@admin.com',
            'email' => 'kepsek@gmail.com',
            'password' => Hash::make('admin_01'),
            'name' => 'Kepala Sekolah',
            'role' => 1
        ]);
        Admin::create([
            'username' => 'bk@admin.com',
            'email' => 'bk@gmail.com',
            'password' => Hash::make('admin_02'),
            'name' => 'Bimbingan Konseling',
            'role' => 1
        ]);
    }
}
