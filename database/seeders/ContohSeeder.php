<?php

namespace Database\Seeders;

use App\Models\Contoh;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class ContohSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $contoh = [
            array( 'name' => 'data1', 'tanggal'=>'2023-09-01','created_at' => $date,'updated_at' => $date),
            array( 'name' => 'data2', 'tanggal'=>'2023-09-02','created_at' => $date,'updated_at' => $date),
        ];
        Contoh::insert($contoh);
    }
}
