<?php

namespace Database\Seeders;

use App\Models\DetailPeriksa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailPeriksa::create([

            'id_periksa' => 1,
            'id_obat' => 1,
        ]);
    }
}
