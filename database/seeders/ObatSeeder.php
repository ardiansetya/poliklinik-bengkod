<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('obat')->insert([
                [
                    'nama_obat' => 'Paracetamol',
                    'kemasan' => 'Tablet',
                    'harga' => 5000
                ]
            ]);
    }
}
