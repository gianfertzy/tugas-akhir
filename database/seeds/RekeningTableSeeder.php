<?php

use App\Models\Rekening;
use Illuminate\Database\Seeder;

class RekeningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['bank_name' => 'BRI','atas_nama'=>'Toko HP','no_rekening'=>'123123']
        ];
        Rekening::insert($data);
    }
}
