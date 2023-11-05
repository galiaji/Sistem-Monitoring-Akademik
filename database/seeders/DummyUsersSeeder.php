<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Dosen Wali',
                'email' => 'dosenwali@gmail.com',
                'role' => 'dosenwali',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Departemen',
                'email' => 'departemen@gmail.com',
                'role' => 'departemen',
                'password' => bcrypt('123456')
            ],
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}