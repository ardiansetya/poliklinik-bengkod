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
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'dr. bram',
                'alamat' => 'Semarang',
                'no_hp' => '089672944224',
                'email' => 'andi.dokter@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
            ],
            [
                'name' => 'Isna',
                'alamat' => 'Semarang',
                'no_hp' => '089672944225',
                'email' => 'isna.pasien@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
            ],
        ]);
    }
}
